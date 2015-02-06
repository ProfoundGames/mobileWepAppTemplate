<html>
    
    <head>
        
        <title>Test Page</title>
        
        <?php @include '../includes/head.php'; ?>
        
    </head>
    
    <body>
       
        <header>
            
            <?php @include '../includes/header.php'; ?>
            
        </header>
        
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!--First Slide-->
                <div class="swiper-slide slideContentWrapper"> 
                    <!-- Any HTML content of the first slide goes here -->
        
                    <?php @include '../includes/pageContent/templatePage.php'; ?>
                    
                    <?php @include '../includes/footer.php'; ?>
                    
                </div>
      
                <!--Second Slide-->
                <div class="swiper-slide slideMenuWrapper">
                    <!-- Any HTML content of the second slide goes here -->
                    
                    <?php @include '../includes/menu.php'; ?>
                    
                </div>
            </div>
        </div>
        
         
      
  </div>
</div>
        
    </body>
    
</html>
