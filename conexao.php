<?php
  function abreConexao()
  {
  	return @ mysqli_connect("localhost","root","","confeccao");
  }
?>