<!--collapse........-->
        <!--hero image.................-->
 
      <div class='heroImage'>
        <im src='images/wall4.jpg' >
        <button type = "button" class = 'btn btn-success btnDown' id='rot' onclick='rotate()' data-toggle ='collapse' data-target ='#profile'><div class="fa fa-arrow-down" id='arDown'></div></button>
              
        <center class='container'>
            <div id='profile' class="collapse">
                    <div class="card-deck">
                     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                       <div class="card block">
                         <div class=" fa fa-user">
                         </div>
                       <p>Edit profile</p>
                       </div>

                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                       <div class="card block">
                         <div class=" fa fa-home">
                         </div>
                       <p>Find Rooms</p>
                       </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                       <div class="card block">
                         <div class=" fa fa-home">
                         </div>
                       <p>Rent Rooms</p>
                       </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                       <div class="card block">
                         <div class=" fa fa-handshake">
                         </div>
                       <p>Find lodger</p>
                       </div>
                     </div>
                    </div>
                </div>
          </center>
        </div>
<!-- content................-->
     <div class="clearfix">
         
     </div>
      
   
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <script src="vendor/jquery.min.js"></script>
    <script src="vendor/bootstrap.bundle.min.js"></script>
    <script>
        let counter = 0;
         
        function rotate() {
             
           let x = document.getElementById('arDown');
             if(counter%2===0) 
             x.style.transform = 'rotate(180deg)';
             else
                 x.style.transform = 'rotate(360deg)';
             counter++;
             console.log(counter);
        };
      </script>
   