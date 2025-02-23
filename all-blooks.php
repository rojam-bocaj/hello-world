<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
    <style>
        .gallery img {
            width: 150px;
            height: auto;
            margin: 10px;
        }
        .gallery .blook {
            display: inline-block;
            text-align: center;
            margin: 10px;
        }
        .gallery .blook p {
            margin: 5px 0 0;
            font-family: 'Titan One', cursive;
        }
        .pack-title {
            font-size: 1.5em;
            margin-top: 20px;
        }
        .common { color: rgb(89, 182, 55); }
        .rare { color: rgb(0, 30, 243); }
        .epic { color: rgb(172, 33, 12); }
        .legendary { color: rgb(246, 140, 36); }
        .chroma { color: rgb(59, 194, 252); }
        .mystical { color: rgb(143, 58, 230); }
    </style>
</head>
<body>
    <div class="gallery">
        <?php
        function getImages($dir) {
            $images = [];
            $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
            foreach ($files as $file) {
                if (in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'gif', 'svg'])) {
                    $images[] = str_replace('/Applications/XAMPP/xamppfiles/htdocs', '', $file->getPathname());
                }
            }
            return $images;
        }

        $dir = '/Applications/XAMPP/xamppfiles/htdocs/Images/Blooks';
        $images = getImages($dir);

        // Define the order and rarity of the images for each category
        $medieval = [
            '/Images/Blooks/witch.svg' => [1, 'Common'],
            '/Images/Blooks/wizard.svg' => [2, 'Common'],
            '/Images/Blooks/elf.svg' => [3, 'Common'],
            '/Images/Blooks/fairy.svg' => [4, 'Common'],
            '/Images/Blooks/slime-monster.svg' => [5, 'Common'],
            '/Images/Blooks/jester.svg' => [6, 'Rare'],
            '/Images/Blooks/dragon.svg' => [7, 'Rare'],
            '/Images/Blooks/queen.svg' => [8, 'Rare'],
            '/Images/Blooks/unicorn.svg' => [9, 'Epic'],
            '/Images/Blooks/king.svg' => [10, 'Legendary'],
        ];

        $wonderland = [
            '/Images/Blooks/two-of-spades.svg' => [1, 'Common'],
            '/Images/Blooks/eat-me.svg' => [2, 'Common'],
            '/Images/Blooks/drink-me.svg' => [3, 'Common'],
            '/Images/Blooks/alice.svg' => [4, 'Common'],
            '/Images/Blooks/queen-of-hearts.svg' => [5, 'Common'],
            '/Images/Blooks/dormouse.svg' => [6, 'Rare'],
            '/Images/Blooks/white-rabbit.svg' => [7, 'Rare'],
            '/Images/Blooks/cheshire-cat.svg' => [8, 'Rare'],
            '/Images/Blooks/caterpillar.svg' => [9, 'Epic'],
            '/Images/Blooks/mad-hatter.svg' => [10, 'Epic'],
            '/Images/Blooks/king-of-hearts.svg' => [11, 'Legendary'],
        ];

        $breakfast = [
            '/Images/Blooks/toast.svg' => [1, 'Common'],
            '/Images/Blooks/cereal.svg' => [2, 'Common'],
            '/Images/Blooks/yogurt.svg' => [3, 'Common'],
            '/Images/Blooks/breakfast-combo.svg' => [4, 'Common'],
            '/Images/Blooks/orange-juice.svg' => [5, 'Common'],
            '/Images/Blooks/milk.svg' => [6, 'Common'],
            '/Images/Blooks/waffle.svg' => [7, 'Rare'],
            '/Images/Blooks/pancakes.svg' => [8, 'Rare'],
            '/Images/Blooks/french-toast.svg' => [9, 'Epic'],
            '/Images/Blooks/pizza.svg' => [10, 'Epic']
        ];

        $space = [
            // Add images with numbers and rarity
        ];

        $bot = [
            // Add images with numbers and rarity
        ];

        $aquatic = [
            // Add images with numbers and rarity
        ];

        $safari = [
            // Add images with numbers and rarity
        ];

        $dino = [
            // Add images with numbers and rarity
        ];

        $ice = [
            // Add images with numbers and rarity
        ];

        $outback = [
            // Add images with numbers and rarity
        ];

        $pirate = [
            // Add images with numbers and rarity
        ];

        $spooky = [
            // Add images with numbers and rarity
        ];

        $autumn = [
            // Add images with numbers and rarity
        ];

        $blizzard = [
            // Add images with numbers and rarity
        ];

        $hidden = [
            // Add images with numbers and rarity
        ];

        // Combine all arrays into one
        $packs = [
            'Medieval Pack' => $medieval,
            'Wonderland Pack' => $wonderland,
            'Breakfast Pack' => $breakfast,
            'Space Pack' => $space,
            'Bot Pack' => $bot,
            'Aquatic Pack' => $aquatic,
            'Safari Pack' => $safari,
            'Dino Pack' => $dino,
            'Ice Monsters Pack' => $ice,
            'Outback Pack' => $outback,
            'Pirate Pack' => $pirate,
            'Spooky Pack' => $spooky,
            'Autumn Pack' => $autumn,
            'Blizzard Pack' => $blizzard,
            'Hidden Blooks' => $hidden,
        ];

        foreach ($packs as $packName => $pack) {
            echo '<div class="pack-title">' . $packName . '</div>';
            foreach ($pack as $imagePath => $info) {
                $rarity = strtolower($info[1]);
                echo '<div class="blook">';
                echo '<img src="' . $imagePath . '" alt="Image">';
                echo '<p class="' . $rarity . '">' . $info[1] . '</p>';
                echo '</div>';
            }
        }
        ?>
    </div>
</body>
</html>
