<?php
require_once 'includes/header.php';

// Buscar projetos do banco
$stmt = $pdo->query("SELECT * FROM projects ORDER BY id DESC");
$projects = $stmt->fetchAll();
?>

<!-- Hero Section -->
<section id="home" class="h-screen flex items-center justify-center text-center pt-16 custom-gradient text-white">
    <!-- [Conteúdo do Hero] -->
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="section">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 gradient-text">Projetos</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <?php foreach ($projects as $project): ?>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="images/projects/<?php echo htmlspecialchars($project['image']); ?>" 
                     alt="<?php echo htmlspecialchars($project['title']); ?>" 
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-[#54343f]">
                        <?php echo htmlspecialchars($project['title']); ?>
                    </h3>
                    <p class="text-gray-600 mb-4">
                        <?php echo htmlspecialchars($project['description']); ?>
                    </p>
                    <div class="flex space-x-2">
                        <?php 
                        $techs = explode(',', $project['technologies']);
                        foreach ($techs as $tech):
                        ?>
                        <span class="bg-[#e77a77] bg-opacity-20 text-[#54343f] px-3 py-1 rounded-full text-sm">
                            <?php echo htmlspecialchars(trim($tech)); ?>
                        </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>