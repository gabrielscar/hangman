</div>
<script>hangman(<?php echo $_SESSION['lives'] ?>);</script>
<script src="jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<!-- taking values from letter buttons and send them to the functions.php file -->
<script>
  $(".alphabetButton").click(function(){
    var id = $(this).attr("id");
    $.ajax({
      method: "POST",
      url: "functions.php",
      data: {
        guess: id
      }
    }).done(function(data){
      location.reload();
    }).fail(function(data) {
    alert( "error" );
    console.log(data);
    console.log(data['responseText']);
  });
  });
</script>
<!-- showing the words category selection form -->
<script>
  $(function(){
    $("#box").hide();
    $(".fa-2x").click(function(){
      $("#box").slideToggle();
    });
  });
</script>
</body>
</html>