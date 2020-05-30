<!doctype html>
    <html>
        <head>
                       <style>
                
                
               *{
                    box-sizing:border-box;
                    
                }
               
               
/*               the upload form css*/
                  #upload{
                    background-color: blue; /* Green */
    /*border: 1px solid green;*/
    color: white;
    padding-left:10px;
    padding-right:10px;
    padding-top:4px;
    padding-bottom:4px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 13px;
    cursor: pointer;
    /*float: left;*/
    margin-left: 50%;
    margin-right: 50%;
   
    /*position:fixed;*/
                bottom:0;
                left:0;
                }
                #button:hover {
    background-color: #3e8e41;
            }
           
            @media only screen and (min-width: 768px)
            {
               
                #upload{
                    font-size: 20px;
                    padding-left:10px;
    padding-right:10px;
    padding-top:5px;
    padding-bottom:4px;
                }
                
               
                   
            }
           
               
               
                html{
                    width: 100%;
                    margin: 0px;
                    padding: 0px;
                    
                    
                }
                body{
                    margin-bottom: 0px;
                    margin-top:0px;
                    margin-left: 0px;
                    margin-right:0px;
                    padding: 0px;
                   background-color:transparent;
                    font-family: sans-serif;
                    
                }
                
               #company{
                    font-weight: bold;
                    letter-spacing: 7px;
                    padding-top: 40px;
                    margin-top:0px;
                    
                     
                }
                .firstSection{
                    display: block;
                    text-align: center;
                    background-color:green;
                    color: white;
                    height: 470px;
                    font-size:190%;
                    
                   
                }
                section{
                    display: block;
                }
                .technologyHeader{
                    width: 96%;
                    background-color:transparent;
                    margin-left: 2%;
                    margin-right: 2%;
                    text-align:left;
                    
                }
        
               
.first {
  
   display: inline-block;
    width:500px;
    max-width: 90%;
    height: auto;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    text-align: center;
    background-color: white;
    margin-left: 5%;
    margin-right: 5%;
    margin-bottom: 9%;
    margin-top: 9%;
 
   
}







a{
    text-decoration: none;
}
div p{
    line-height: 1.5;
    font-size: 18px;
}
img{
     max-width: 100%;
    height: auto;
}

                
                #button-showMore{
                    width: 40%;
                    cursor: pointer;
                    border: 2px solid black;
                    margin: auto;
                    text-align:center;
                    display: block;
                    background-color:white;
                    color: black;
                    padding-bottom: 9px;
                    padding-top: 9px;
                    padding-left: 7px;
                    padding-right: 7px;
                }
                
                #button-showMore:hover{
                    color: white;
                    background-color: indigo;
                }
                
           
                
               
               
     @media only screen and (min-width:480px)
     {
        
   
    .first{
        max-width: 100%;
        width: 45%;
        display: inline-block;
        margin: 2%;
        
    }
    
    div h1{
         word-wrap: break-word;
    }
    p{
        overflow: hidden;
    
    max-height: 193px;
     word-wrap: break-word;
    }
    .second{
        margin: 1%;
    }
    
    
    
    
    }
    
    
    @media only screen and (min-width:813.225px)
    {
        
        .first{
        max-width: 100%;
        width: 29%;
        display: inline-block;
        margin: 2%;
        
        
    }
    
    }           
         
       section p
       {
        font-size: 25px;
        text-align: center;
       }
          
                
                
            </style>
        </head>
        <body>
            <header style="color:white;background-color: grey;text-align: center;height: 200px;">
                 <h1 id="company">HED TELL</h1>
            </header>
            
            <a href="http://www.productReview.hedtell.com">
             <section class="firstSection" style="height:150px;padding:15px;">
               
                <p style="font-size: 16px;">productReview.hedtell.com</p>
                <p style="font-size: 80%;">share your experience about a product or service you have ever used</p>
             </section>
            </a>
             
             <a href="http://www.bluad.hedtell.com">
             <section class="firstSection" style="color:white;background-color: red;height: 150px;padding: 15px;">
                
                <p style="font-size: 16px;">bluad.hedtell.com</p>
                <p style="font-size: 80%;">share beautiful pictures and art with the world</p>
             </section>
             </a>
             
             <a href="http://www.blog.hedtell.com">
             <section class="firstSection" style="color:white;background-color:blue;height: 150px;padding: 15px;">
                
                <p style="font-size: 16px;">blog.hedtell.com</p>
                <p style="font-size: 80%;">health, beauty, fitness, etc</p>
             </section>
             </a>
             
             <?php include 'footer.php'?>
        </body>
    </html>