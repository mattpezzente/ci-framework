<!DOCTYPE html>
<html>
<head>
  
  <title>Add Fruit</title>

  <style type="text/css">

  h1 {
    font-size: 48px;
    color: #333;
  }

  td, th {
    text-align: left;
    min-width: 100px;
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
    margin-bottom: 2rem;
  }
  
  </style>

</head>
<body>
<section class="content">
  <section class="form-container">
    <h1>Add Fruit</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('cms'); ?>    
      <input type="text" name="name" />
      <input type="submit" value="Add Fruit" />
    </form>
  </section>
  <section class="table-container">
    <table>
      <thead>
        <tr>
          <th>Fruit</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php      
          foreach ($fruits as $fruit) {
            echo '<tr>';
            echo '<td>'.$fruit->name.'</td>';
            echo '<td><a href="cms/formUpdate/'.$fruit->id.'">Update</a></td>';
            echo '<td><a href="cms/actionDelete/'.$fruit->id.'">Delete</a></td>';
            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
  </section>
</section>
</body>
</html>