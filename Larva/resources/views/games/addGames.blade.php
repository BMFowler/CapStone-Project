@include('app')

<!-- page for browsing games-->
<div class="titleContainer">
    <h1>Enter Games information</h1>
    <form id="formAdd" name="formAdd">
        <p>Title:</p>
        <input id="title" name="Title" type="text">
        </br>
        <p>Description:</p>
        <input id="Description" name="Description" type="text">
        </br>
        <p>Image LInk:</p>
        <input id="ImageLink" name="Image Link" type="text">
        </br>
        <p>Link to game:</p>
        <input id="LinkToGame" name="Link to Game" type="text">
        </br>
        <h2>Tags:</h2>
        <p>No Tags Found...</p>
        <!-- add tags import here-->

        <input name="Submit" type="submit" text="Submit" id="subGame" onclick="return confirm('Are You sure you want to add this game? ' +
         'No changes can be made after submission')"></br>
        <p>*Please note it may take several business days for an admin to look over your
        proposed game.</p>
    </form>
</div>