<script src="jquery.min.js"></script>
                  <script src="jquery.imgareaselect.min.js"></script>
                  <script src="jquery.imgareaselect.pack.js"></script>
                  <script src="bootstrap/js/bootstrap.min.js"></script>
                  <link rel="stylesheet" href="bootstrap.css" />
                  <link rel="stylesheet" href="imgareaselect-default.css" />
                  <link rel="stylesheet" href="modal.css" />

                  <script type="text/javascript">
                  $(document).ready(function(){
                    $('#change').click(function(){
                        $("#myModal3").modal('show');
                    });
                    $('#myImg').imgAreaSelect();
                  });
                  </script>

<button id="change">Change Photo</button>
                   <div  id="myModal3" class="modal hide fade myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <img src="bitroots.jpg" id="myImg">
                       <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                  </div>