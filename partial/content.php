<?php 
    $postList = array(
        array(
            'image' => 'https://via.placeholder.com/800x400',
            'title' => 'Exploring the Art of Cooking',
            'content' => 'Cooking is an art that combines various flavors, textures, and aromas. Join us in exploring the secrets of culinary delight.',
            'date' => 'December 10, 2023'
        ),
        array(
            'image' => 'https://via.placeholder.com/800x400',
            'title' => 'Travel Photography: Capturing Memories',
            'content' => 'Embark on a visual journey through stunning landscapes and vibrant cultures. Discover the essence of travel photography.',
            'date' => 'January 22, 2024'
        ),
        array(
            'image' => 'https://via.placeholder.com/800x400',
            'title' => 'Fitness and Wellness: A Holistic Approach',
            'content' => 'Achieving fitness isn’t just about exercise; it’s a lifestyle. Explore the holistic approach to wellness and staying healthy.',
            'date' => 'February 5, 2024'
        )
    );
?>


<div class="container mt-5">
    <?php 
        foreach ($postList as $postData) { 
            include('partial/post.php');
        } 
    ?>

    
</div>
