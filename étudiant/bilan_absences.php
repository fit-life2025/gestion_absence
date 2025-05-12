<?php
session_start();
require_once '../config/db.php'; // connexion PDO

// Vérification de l'identité de l'étudiant connecté
if (!isset($_SESSION['apogee'])) {
    header('Location: ../index.php');
    exit();
}

$apogee = $_SESSION['apogee'];

// Récupérer les infos de l'étudiant
$stmt = $pdo->prepare("SELECT nom, prenom FROM etudiants WHERE apogee = ?");
$stmt->execute([$apogee]);
$etudiant = $stmt->fetch();

if (!$etudiant) {
    echo "Étudiant introuvable.";
    exit();
}

// Récupérer les absences de l'étudiant
$query = "
    SELECT m.nom AS module, a.date_absence, a.justifie
    FROM absences a
    JOIN modules m ON a.id_module = m.id
    WHERE a.apogee = ?
    ORDER BY a.date_absence DESC
";
$stmt = $pdo->prepare($query);
$stmt->execute([$apogee]);
$absences = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bilan des absences</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow">
        <h2 class="text-2xl font-bold text-amber-800 mb-4">
            Bilan des absences - <?= htmlspecialchars($etudiant['prenom'] . ' ' . $etudiant['nom']) ?>
        </h2>

        <?php if (empty($absences)): ?>
            <p class="text-gray-600">Aucune absence enregistrée.</p>
        <?php else: ?>
            <table class="min-w-full border border-gray-300 mt-4">
                <thead class="bg-amber-800 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left">Module</th>
                        <th class="px-4 py-2 text-left">Date</th>
                        <th class="px-4 py-2 text-left">Justifiée</th>
                    </tr>
                </thead>
                <tbody class="text-gray-800">
                    <?php foreach ($absences as $absence): ?>
                        <tr class="border-b">
                            <td class="px-4 py-2"><?= htmlspecialchars($absence['module']) ?></td>
                            <td class="px-4 py-2"><?= htmlspecialchars($absence['date_absence']) ?></td>
                            <td class="px-4 py-2">
                                <?= $absence['justifie'] ? '✅ Oui' : '❌ Non' ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>
