<script src="js/jquery.min.js"></script>

<input id='px' type="text">

<p>rem: <span class="rem"></span> </p>


<div class='em_box'>
  <input type="text" id='em' />
  <p>em: <span class="em"></span> </p>
</div>
<div class='max_box'>
  <input type="text" id='base'  placeholder="base"/>
  <input type="text" id='base_px' placeholder="px"/>
  <p>Percent: <span class="res"></span> </p>
</div>
<div class='get_dif'>
  <input type="text" id='base_diff'  placeholder="Percent"/>
  <input type="text" id='comp' placeholder="Percent"/>
  <p>Percent: <span class="res_comp"></span> </p>
</div>
<div class='vw'>
  <input type="text" id='base_vw'  placeholder="px"/>
  <input type="text" id='comp_vw' placeholder="px"/>
  <p>vw: <span class="res_vw"></span> </p>
</div>

<script>
  $(document).ready(function(){
    $('#px').focusout(function(){
      var p = $(this).val();
      var rem  = (p/10)*0.625;
      $('.rem').text(rem+'rem');
    });
    $('#em').focusout(function(){
      var p = $(this).val();
      var rem  = (p/6)*0.375;
      $('.em').text(rem+'em');
    });
    $('#comp').focusout(function(){
      var px_val = $(this).val();
      var base_val = $('#base_diff').val();
      var cal  = base_val - px_val ;
      $('.res_comp').text(cal+'%');
    });
    $('#base_px').focusout(function(){
      var px_val = $(this).val();
      var base_val = $('#base').val();
      var cal  = (px_val/base_val)*100;
      $('.res').text(cal+'%');
    });
    $('#comp_vw').focusout(function(){
      var x = $(this).val();
      var y = $('#base_vw').val();
      var cal  = (px_val/base_val)*100;
      $('.res').text(cal+'%');
    });
  });
</script>