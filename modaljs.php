<div id="modal_ghePH" class="modal w3-modal-content w3-animate-top w3-card-4">
  <div class="modal-content">
    <div class="contact-form">
      <a class="close">&times;</a>
      <h2>THE GRAND EXCELSIOR HOTEL – PHILIPPINES</h2>
      <h4>We aim to introduce the first eminent Five Star Luxury Resort establishment in Pagbilao. We are engage to provide the best luxurious resort in Quezon with specifically designed and well-developed modern facilities. 
Within the coast of Pagbilao, Quezon, the Grand Hotel Excelsior will provide the best accommodation in the South with its fusion of Mediterranean and Asian design concept adopting the system of The Grand Hotel Excelsior Malta.
The hotel will focus on helping the community to increase its tourism industry and seeking to take advantage to be one of the tourist destination in the Philippines.</h4>
    </div>
  </div>
</div>

<div id="modal_gheMalta" class="modal w3-modal-content w3-animate-top w3-card-4">
  <div class="modal-content">
    <div class="contact-form">
      <a class="close">&times;</a>
      <h2>THE GRAND EXCELSIOR HOTEL – PHILIPPINES</h2>
      <h4>We aim to introduce the first eminent Five Star Luxury Resort establishment in Pagbilao. We are engage to provide the best luxurious resort in Quezon with specifically designed and well-developed modern facilities. 
Within the coast of Pagbilao, Quezon, the Grand Hotel Excelsior will provide the best accommodation in the South with its fusion of Mediterranean and Asian design concept adopting the system of The Grand Hotel Excelsior Malta.
The hotel will focus on helping the community to increase its tourism industry and seeking to take advantage to be one of the tourist destination in the Philippines.</h4>
    </div>
  </div>
</div>


<div id="modal_corp_office" class="modal w3-modal-content w3-animate-top w3-card-4">
  <div class="modal-content">
    <div class="contact-form">
      <a class="close">&times;</a>
      <h2>CORPORATE OFFICE</h2>
      <h4>As the business demand increases, this building is specifically designed as the headquarters for the Asia Pacific World Holdings Inc. The ten storey building with roof deck will provide you the best view with stunning 360 degrees panoramic view of the Pacific Ocean and the mountain range of Pagbilao, Quezon.
The design concept of this building is a bird wings for its building façade treatment by a long vertical and swift element towards the roof deck. Dominant curtain will characterized as distinct essence of the style, generally inspired on the postmodern architecture (1940’s) of free form.</h4>
    </div>
  </div>
</div>


<div id="modal_corp_annex" class="modal w3-modal-content w3-animate-top w3-card-4">
  <div class="modal-content">
    <div class="contact-form">
      <a class="close">&times;</a>
      <h2>CORPORATE BUILDING – ANNEX</h2>
      <h4>This Annex is designed as a futuristic approach for Office building this century which reconstructs the working environment to a more livable and breathing space, to relieve the minds of the employees which will enhance their working production. With this postmodern architecture that harmonizes the Corporate Building’s design concept. This six storey adjacent medium-rise structure to the Corporate Building with a well-designed Parking structure to exhilarate the work flow from the noise of play and motion of vehicles and provide amenities for the employees connected through an engineered bridge structural design to provide convenience to its community.</h4>
    </div>
  </div>
</div>



<div id="modal_shopcenter" class="modal w3-modal-content w3-animate-top w3-card-4">
  <div class="modal-content">
    <div class="contact-form">
      <a class="close">&times;</a>
      <h2>SHOPPING CENTER AND RESIDENTIAL CONCEPT</h2>
      <h4>A mix of Mediterranean and Modern architecture to cope up with the current trend in the Philippines. This proposal will not destroy the natural terrain and the beauty of the surroundings. This will bring the urban life to the rural part of Pagbilao, Quezon. It will help to enhance the market value of the properties near the commercial complex. This will open a great advantage to the residents but also to the whole municipality</h4>
    </div>
  </div>
</div>


<div id="modal_manager_house" class="modal w3-modal-content w3-animate-top w3-card-4">
  <div class="modal-content">
    <div class="contact-form">
      <a class="close">&times;</a>
      <h2>THE MANAGER’S HOUSE</h2>
      <h4>The official residence of the Expatriate Manager coming from different countries. Originally designed from Hong Kong, the intent of the structure depicts a Mediterranean with Asian inspired furniture offering the guest the best experience of the Filipino Culture.</h4>
    </div>
  </div>
</div>


<div id="modal_exec_housing" class="modal w3-modal-content w3-animate-top w3-card-4">
  <div class="modal-content">
    <div class="contact-form">
      <a class="close">&times;</a>
      <h2>EXECUTIVE HOUSING</h2>
      <h4>This modern classical fusion of residential living offers the best accommodation exclusively for in-house executive directors coming from local and international countries.</h4>
    </div>
  </div>
</div>


<div id="modal_quezon_seaport" class="modal w3-modal-content w3-animate-top w3-card-4">
  <div class="modal-content">
    <div class="contact-form">
      <a class="close">&times;</a>
      <h2>QUEZON INTERNATIONAL SEAPORT</h2>
      <h4>A world class International Seaport with deep water berths and supporting structures that will definitely provide an income-generating center in Quezon Province. This megastructure development strategically located in the province of Pagbilao, Quezon where it is designated as an Industrial zone. It will be constructed on a proposed reclamation area where it will be connected by a bridge from the shore.
</h4>
    </div>
  </div>
</div>






<script>
    var modalBtns = [...document.querySelectorAll(".button")];
modalBtns.forEach(function(btn){
  btn.onclick = function() {
    var modal = btn.getAttribute('data-modal');
    document.getElementById(modal).style.display = "block";
  }
});

var closeBtns = [...document.querySelectorAll(".close")];
closeBtns.forEach(function(btn){
  btn.onclick = function() {
    var modal = btn.closest('.modal');
    modal.style.display = "none";
  }
});

window.onclick = function(event) {
  if (event.target.className === "modal") {
    event.target.style.display = "none";
  }
}
</script>