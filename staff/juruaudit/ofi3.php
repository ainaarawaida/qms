<?php
include_once '../../db.php';
//include_once 'session.php';

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Add Remove Select Box Fields Dynamically using jQuery Ajax in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Add Remove Select Box Fields Dynamically using jQuery Ajax in PHP</h3>
   <br />
   <h4 align="center">Enter Item Details</h4>
   <br />
   <form method="post" id="insert_form">
    <div class="table-repsonsive">
     <span id="error"></span>
     <table class="table table-bordered" id="item_table">
      <tr>
       <th>Klausa</th>
       <th>Jabatan/Unit</th> 
       <th>Perincian</th>
       <th>Tindakan Susulan</th>
       <th>Tarikh Tindakan</th>
       <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
      </tr>
     </table>
     <div align="center">

      <button type="button" id="save" class="btn btn-primary">Hantar</button>
     </div>
    </div>
   </form>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><input type="text" id="klausa" name="klausa" class="form-control klausa" /></td>';
  html += '<td><input type="text" id="jabatan_unit" name="jabatan_unit[]" class="form-control jabatan_unit" /></td>';
  html += '<td><input type="text" id="perincian" name="perincian[]" class="form-control perincian" /></td>';
  html += '<td><input type="text" id="susulan" name="susulan[]" class="form-control susulan" /></td>';
  html += '<td><input type="text" id="tarikh_tindakan" name="tarikh_tindakan[]" class="form-control tarikh_tindakan" /></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
  $('#item_table').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 var _autosave;
    $('#save').on('click', function(){
        clearInterval(_autosave);
        var klausa = $('#klausa').val();
        var jabatan_unit = $('#jabatan_unit').val();
        var perincian = $('#perincian').val();
        var susulan = $('#susulan').val();
        var tarikh_tindakan = $('#tarikh_tindakan').val();
        var no_id = $('#no_id').val();
 
            if( klausa != "" ){
                $.ajax({
                url: 'save_ofi.php',
                type: 'POST',
                data: {klausa: klausa, jabatan_unit: jabatan_unit, perincian: perincian, susulan: susulan, tarikh_tindakan: tarikh_tindakan,no_id: no_id},
                success: function(){
                    $('#klausa').val('');
                    $('#jabatan_unit').val('');
                    $('#perincian').val('');
                    $('#susulan').val('');
                    $('#tarikh_tindakan').val('');
                    $('#no_id').val('');
                    $('#result').html("<center>Post Submitted!</center>")
                    AutoSave();
                }
            });
        }
    });
 
    function AutoSave(){
        _autosave = setInterval(function(){
        var klausa = $('#klausa').val();
        var jabatan_unit = $('#jabatan_unit').val();
        var perincian = $('#perincian').val();
        var susulan = $('#susulan').val();
        var tarikh_tindakan = $('#tarikh_tindakan').val();
        var no_id = $('#no_id').val();
     
            if( klausa != ""){
                $.ajax({
                url: 'update_ofi.php',
                type: 'POST',
                data: {klausa: klausa, jabatan_unit: jabatan_unit, perincian: perincian, susulan: susulan, tarikh_tindakan: tarikh_tindakan,no_id: no_id},
                    success: function(data){
                        if(data != ""){
                            $('#no_id').val(data);
                        }
                    }
                });
            }
        }, 2000);
    }
    AutoSave();
 
});
</script>