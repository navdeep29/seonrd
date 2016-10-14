<!DOCTYPE html>
<html>
    <head>
        <title>Website SEONRD</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
    </head>
    
    <body>
      <div class="header-container navbar navbar-fixed-top only" >
            <div class="container">
                <div class="navbar-header">
                <a class="logo navbar-brand active" href="/"><i class="fa fa-home"></i></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                </div>
                <ul class="nav navbar-nav navbar-right into collapse navbar-collapse">
                    <li><a href="#services-section">SERVICES</a></li>
                    <li><a href="#about-section">ABOUT</a></li>
                    <li><a href="#client-section">CLIENTS</a></li>
                    <li><a href="#contact-section"><i class="fa fa-envelope-o"></i></a></li>
                </ul>
            
            </div>  
        </div>
        
        <div class="form container centered"> 
        <form action="contact.php" method="post" name="help_form" id="help_form">
                            
           <div class="form-group"><input class="form-control" type="text" name="fullname" placeholder="Name" required></div>
           <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email Address" required></div>
          <div class="form-group"><input class="form-control" type="phone" name="phone" placeholder="Phone" required></div>
          <div class="form-group"><textarea class="form-control" rows="2" cols="43" name="description" placeholder="Description of Project" id="description" required></textarea></div>
           <div class="form-group"><input class="btn btn-primary color" type="submit" name="submit_button" value="Submit Request"></div>
           
        </form>
      
        </div>
        
           <div class="content2" id="services-section">
            <div class="container">
                <div class="row centered col-md-12">
                    <h3>SERVICES</h3> 
                </div>
                <div class="row centered">
                    <div class="col-sm-4">
                        <i class="fa fa-line-chart"></i>
                        <h4>SEO</h4>
                        <p class="leftp">Potential customers and clients are already searching for products and services that your company offers. We will optimize your website so that it gets found. Formal keyword research research is the foundational piece in SEO that will help in understanding what people are searching for, how frequently they do it and which of those keywords are relevant to your business and how competitive those terms will be to try rank for.</p>
                    </div>
                    <div class="col-sm-4">
                        <i class="fa fa-list-alt"></i>
                        <h4>Responsive Design</h4>
                        <p class="leftp">Responsive Sites Improve SEO Rankings. Responsive development is Google's recommended approach for mobile web design. Per Google, responsive websites will perform better in search rankings because they provide a better user experience than sites that are not mobile friendly. We can convert your current design to responsive design or make a new one for you.</p>
                    </div>
                     
                     <div class="col-sm-4">
                         <i class="fa fa-qrcode"></i>
                        <h4>PPC</h4>
                        <p class="leftp">Well organized paid search campaign connects potential customers with your business when they are ready to buy. We will develop targeted ads that will bring ready to buy traffic to your website. This will increase your leads, calls and result in more sales.</p>
                    </div>
                </div>
                <div class="row centered service">
                    <div class="col-sm-4">
                         <i class="fa fa-search-plus"></i>
                        <h4>Content Marketing</h4>
                        <p class="leftp">Content marketing is very essential to online marketing. We will leverage your current content to create more informed and engaged customer. This will help build your brand and educate potential customers about your mission statement.</p>
                    </div>
                     <div class="col-sm-4">
                         <i class="fa fa-edit"></i>
                        <h4>Custom Programming</h4>
                        <p class="leftp">Custom programming is a collaborative effort with our clients. We understand each project is unique. Our team is very talented in Javascript, PHP and whole LAMP stack. We can provide you with a reliable, customized and user friendly web solution.</p>
                    </div>
                     <div class="col-sm-4">
                         <i class="fa fa-code"></i>
                        <h4>Webspeed/Progress Programming</h4>
                        <p class="leftp">WebSpeed is used to manipulate, customize, and automate facilities for web-based applications. We can help you with your Progress WebSpeed projects. Not only that we can also help you with SS7 and sigtran programming as well.</p>
                    </div>
                </div>
                
            </div>
        </div> 
        
   <footer id="footer">
        <div class="container">
            <div class="row centered">
                <p>Copyright &copy;2016 <span class="yellow">Sarai Digital</span>. All Rights Reserved.</p>    
             </div>
        </div>
    </footer>    
        
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./js/bootstrap.min.js"></script> 
    <script src="./js/jquery.scrolly.js"></script>
    <script src="./js/site.js"></script>
    </body>
</html>     

