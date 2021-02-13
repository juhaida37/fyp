<?php
 // INCLUDE THE phpToPDF.php FILE
require("config.php"); 
require("phpToPDF/phpToPDF.php"); 

// PUT YOUR HTML IN A VARIABLE
$my_html="<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\">
    <title>Registration Slip</title>
    <link rel=\"stylesheet\" href=\"http://phptopdf.com/bootstrap.css\">
    <style>
      @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
      body, h1, h2, h3, h4, h5, h6{
      font-family: 'Bree Serif', serif;
      }
    </style>
  </head>
  
  <body>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-6\">
          <h1>
                     
            Residential College Registration Slip
            
          </h1>
        </div>
        <div class=\"col-xs-6 text-right\">
          <h1><img src=\"logozaba.png\" width=\"100\" height=\"100\"></h1>
          
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-5\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4><a href=\"#\">Your Name</a></h4>
            </div>
            <div class=\"panel-body\">
              <p>
                Matric No <br>
                Address <br>
                Phone Number <br>
              </p>
            </div>
          </div>
        </div>
        <div class=\"col-xs-5 col-xs-offset-2 text-right\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4>Block : <a href=\"#\">Client Name</a></h4>
            </div>
            <div class=\"panel-body\">
              <p>
                Room Number <br>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- / end client details section -->
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <th>
              <h4>No.</h4>
            </th>
            <th>
              <h4>Electrical Appliances</h4>
            </th>
            <th>
              <h4>Quantity</h4>
            </th>
            <th>
              <h4>Sticker</h4>
            </th>
           </tr>
        </thead>
        <tbody>
          <tr>
            <td>Article</td>
            <td><a href=\"#\">Title of your article here</a></td>
            <td class=\"text-right\">-</td>
            <td class=\"text-right\"></td>
          </tr>
          <tr>
            <td>Template Design</td>
            <td><a href=\"#\">Details of project here</a></td>
            <td class=\"text-right\">10</td>
            <td class=\"text-right\"></td>
          </tr>
          <tr>
            <td>Development</td>
            <td><a href=\"#\">WordPress Blogging theme</a></td>
            <td class=\"text-right\">5</td>
            <td class=\"text-right\"></td>
          </tr>
        </tbody>
      </table>
      <br><br>
      <div class=\"row\">
        <div class=\"col-xs-5\">
          <div class=\"panel panel-info\">
            
          </div>
        </div>
        <div class=\"col-xs-7\">
          <div class=\"span7\">
            <div class=\"panel panel-info\">
              <div class=\"panel-heading\">
                <h4>Office use only</h4>
              </div>
              <div class=\"panel-body\">
                <p>
                  Key : Already taken / Not taken yets <br>
                  Staf Name : <br> 
                  Validation Stamp :  <br><br><br><br><br>
                </p>
                <h5>Penalties will be imposed if students break the rules</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      Please bring this slip to the office during registration day. If not, you are not allowed to pick up the keys or get a sticker. Thank you. <xmp>  </xmp> 
    </div>
  </body>
</html>";

// SET YOUR PDF OPTIONS -- FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'save',
  "save_directory" => '',
  "file_name" => 'Slip.pdf');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);

// OPTIONAL - PUT A LINK TO DOWNLOAD THE PDF YOU JUST CREATED
echo ("<a href='slip.pdf'>Download Your PDF</a>");
?>