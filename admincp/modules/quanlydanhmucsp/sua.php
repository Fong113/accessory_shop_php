<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc where id_danhmuc= '$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>
<p>Sua danh muc san pham</p>
<table border="1px" width = "50%" style=" border-collapse: collapse;">
  <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
    <?php
        while($dong = mysqli_fetch_array( $query_sua_danhmucsp)){
    ?>
  <tr> 
    <td>Ten danh muc</td>
    <td ><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
  </tr>
  <tr>
    <td>Thu tu</td>
    <td ><input type="text" value="<?php echo $dong['thutu'] ?>"  name="thutu"></td>
  </tr>
  <tr>
    <td colspan="2" ><input type="submit" value="Sua danh muc san pham" name = "suadanhmuc"></td>
  </tr>
  <?php
  }
  ?>
 </form>
</table>