<link rel="stylesheet" type="text/css" media="screen" href="css/footer.css">
<footer>
    <div class='container-fluid pt-5 pb-5'>
        <div class='row d-flex justify-content-around'>         
            <div class='col-lg-2 mt-5 footerColumn'>
                <a href="customer_service.php"><H5>KLANTENSERVICE</H5></a>
                <a href='tel:076-1234567'><p><i class="fas fa-phone-square footerIcon"></a></i>&nbsp;&nbsp;&nbsp;<a href='tel:076-1234567'>076-1234567</a></p>
                <a href='mailto:email@email.com'><p><i class="fas fa-envelope-square footerIcon"></a></i>&nbsp;&nbsp;&nbsp;<a href='mailto:email@email.com'>Klantenservice@board.kopp.es</p></a>
            </div>
            <div class='col-lg-2 mt-5 footerColumn'>
                <H5>NIEUWSBRIEF</H5>
                <div class="input-group mb-3 newsLetter">
                  <input type="text" class="form-control shadow-none" placeholder="Vul email-adres in">
                  <div class="input-group-append">
                  <button class="btn btn-outline-secondary shadow-none" data-target="#newsModal" data-toggle="modal" type="submit"><i class="fas fa-edit"></i></button>
              </div>
             </div>
            </div>
            <div class='col-lg-2 mt-5 footerColumn'>
                <H5>CONTACTGEGEVENS</H5>
                <p>Game ON!</p>
                <p>Bordspellenweg 1</p>
                <p>1111GO Breda</p>
                <a href='https://www.facebook.com' target='_blank'><i class="fab fa-facebook footerIcon" id='fbFont'></i></a>&nbsp;
                <a href='https://www.twitter.com' target='_blank'><i class="fab fa-twitter-square footerIcon" id='twFont'></i></a>&nbsp;
                <a href='https://github.com/wilbertschadee/boardgames/' target='_blank'><i class="fab fa-github-square footerIcon" id='ghFont'></i></a>&nbsp;
            </div>
            <div class='col-lg-2 mt-5 footerColumn'>
                <H5>DIRECT NAAR </H5>
                <a href="game_select.php"><p>Spelwijzer</p></a>
                <a href="user.home.php"><p>Mijn persoonlijke pagina</p></a>
                <a href="view_shoppingcart.php"><p>Winkelwagen</p></a>
            </div>
        </div>
    </div>
        <!-- Modal NewsLetter -->
<div id="newsModal" class="modal fade newsLetter" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header text-center">
      <div class="logo flex-fill">
              <ul class="list-inline"> 
                <a href="index.php">

                <img src="img/icons/logo.svg" width="150px" height="50px"/>

                  </a>
                  </ul>
            </div>
      </div>
      <div class="modal-body">
          <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                          <p>Je bent nu ingeschreven voor de nieuwsbrief.</p>
                            <div class="panel-body">
                                    <input class="btn btn-outline-secondary shadow-none mt-3"  id="unsubscribe" name="ubsubscribe" value="Unsubscribe" type="submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn shadow-none" data-dismiss="modal" aria-hidden="true">Sluit</button>
		  </div>	
      </div>
  </div>
  </div>
</div>
<!-- Modal NewsLetter -->
</footer>