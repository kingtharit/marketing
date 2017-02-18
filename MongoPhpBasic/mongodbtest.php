  <?php
  //การสร้าง
  $connection=new MongoClient();

  //สร้าง database
  $db=$connection->dbTest;
  //สร้าง collection
  $collection=$db->createCollection("User");

  ?>
