<form method="POST" action="slanjeporuke.php">
						<div class="form-group">
						  <input type="text" class="form-control" id="naslovPoruke" placeholder="Naslov poruke" name="naslovPoruke">
						</div>

    					<textarea class="form-control" id="sadrzajPoruke" placeholder="Sadržaj poruke..." rows="6" name="poruka"></textarea>
<?
echo "$_username";
?>
						<br>
						<button type="submit" class="btn btn-success btn-xs" style="float: right;" name="posaljiPoruku" value="register">Pošalji poruku</button>

						<? 
						if (isset($_POST["posaljiPoruku"])) {
								echo "Vaša poruka je poslana";
							}
						}
						?>



						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
</form>