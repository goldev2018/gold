<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    /* Popup Box */

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 8888; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 10vh auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 90%; /* Could be more or less, depending on screen size */
}
@media (min-width: 1366px) {
  .modal-content {
    background-color: #fefefe;
    margin: 10vh auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
    }
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

button.button {
    background:none;
  border-top:none;
  border-right:none;
  border-left:none;
  border-bottom:#02274a 1px solid;
  padding:0 0 3px 0;
  font-size:16px;
}

button.button:hover {
  border-bottom:#a99567 1px solid;
  color:#a99567;
}
.elipsis{
   overflow: hidden;
    display: -webkit-box; 
    width: 170px; 
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    position:relative;
    line-height:1.4em;
    /* 3 times the line-height to show 3 lines */
    height:4.2em;
    color: #cf8f36;
}
.elipsis3{
   overflow: hidden;
    display: -webkit-box;
    width: 170px; 
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    position:relative;
    line-height:1.4em;
    /* 3 times the line-height to show 3 lines */
    height:4.2em;
    color: #cf8f36;
}
</style>


<!-- modal -->
