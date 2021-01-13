<?php $this->load->view('header/admin_header') ?>

<div class="row" style="margin-top: 20px; margin-left: 20px;margin-right: 20px">
	<div class="col-12">
		<div id="trial"></div>
		<div class="card m-b-30 pane pane--table1" style="width:700000">
			<div class="card-body pane-hScroll">
				<table id="userTable">

				</table>

				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					Launch demo modal
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="userForm">
									<thead>

										<div style="width:2000px;">
											<div class="input-group">
												<span class="input-group-addon">Text</span>
												<select>

												</select>
											</div>
											<br>
											<div class="input-group">
												<span class="input-group-addon">Text</span>
												<input type="text" class="form-control" name="FName" placeholder="Additional Info">
											</div>
											<br>
											<div class="input-group">
												<span class="input-group-addon">Text</span>
												<input type="text" class="form-control" name="MName" placeholder="Additional Info">
											</div>
											<br>
											<div class="input-group">
												<span class="input-group-addon">Text</span>
												<input type="text" class="form-control" name="LName" placeholder="Additional Info">
											</div>
											<br>
										</div>
										<button type="submit">go</button>
										</tbody>

								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>


				<script type="text/javascript">
					$(document).ready(function() {
						var total = 0;
						$('.txtBox').keyup(function() {
							$('.txtBox').each(function() {
								var txtBoxVal = $(this).val();
								total = total + Number(txtBoxVal);
							});
							$('#total').val(total);
							total = 0;
						});
					});
				</script>

				<script type="text/javascript">
					$('.pane-hScroll').scroll(function() {
						$('.pane-vScroll').width($('.pane-hScroll').width() + $('.pane-hScroll').scrollLeft());
					});
				</script>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$("#userTable").load("<?= base_url('rpmes_controller/Form2TableRecord') ?>");
		$("#userForm").on("submit", function(event) {
			event.preventDefault();
			$.ajax({
				"url": "<?= base_url('rpmes_controller/form2') ?>",
				"method": "POST",
				"data": $(this).serialize(),
				"dataType": "text",
				"success": function(data) {
					$("#trial").html(data);
					$("#userTable").load("<?= base_url('rpmes_controller/Form2TableRecord') ?>");
				}
			})
		});


	})
</script>