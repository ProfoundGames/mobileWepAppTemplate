<html>
    
    <head>
        
        <title>Test Page</title>
        
        <?php @include 'includes/headHome.php'; ?>
        
    </head>
    
    <body>
       
        <header>
            
            <?php @include 'includes/headerHome.php'; ?>
            
        </header>
        
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!--First Slide-->
                <div class="swiper-slide slideContentWrapper"> 
                    <!-- Any HTML content of the first slide goes here -->
        
                    <?php @include 'includes/pageContent/home.php'; ?>
                    
                    <?php @include 'includes/footer.php'; ?>
                    
                </div>
                
                <!--Second Slide-->
                <div class="swiper-slide slideMenuWrapper"><div id="toMenu"></div>
                    <!-- Any HTML content of the second slide goes here -->
                    
                    <?php @include 'includes/menuHome.php'; ?>
                    
                </div>
            </div>
        </div>
        
         
      
  </div>
</div>
        
    </body>
    
</html>
