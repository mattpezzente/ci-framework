<!DOCTYPE html>
<html>
<head>
  
  <title>Update Fruit</title>

  <style type="text/css">
  
  h1 {
    font-size: 48px;
    color: #333;
  }

  .content {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    width: 100%;
  }

  .form-container {
    text-align: center;
    width: 100%;
  }
  </style>

</head>
<body>
<section class="content">
  <section class="form-container">
    <h1>Update Fruit</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('cms/formUpdate/'.$fruit[0]->id); ?>
      <input type="text" name="name" value=<?php echo $fruit[0]->name; ?> />
      <input type="submit" value="Update" />
    </form>
  </section>
</section>
</body>
</html>