<?php 
    //load file Layout.php vao day
    $this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=products&action=create" class="btn btn-primary">Add product</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List products</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Photo</th>
                    <th>Name</th>
                    <th style="width:50px;">Hot</th>
                    <th style="width:80px;">Price</th>
                    <th style="width:80px;">Discount</th>
                    <th style="width:150px;">Category</th>
                    <th style="width:150px;">Field</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach ($data as $rows): ?>
                <tr>
                    <td>
                        <?php if($rows->photo != "" && file_exists("../assets/upload/products/".$rows->photo)): ?>
                        <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td style="text-align:center;">
                        <?php if(isset($rows->hot) && $rows->hot == 1): ?>
                            <span class="fa fa-check"></span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo number_format($rows->price); ?></td>
                    <td><?php echo $rows->discount; ?></td>
                    <td>
                        <?php 
                            //co the truc tiep truy van csdl o view
                            $conn = Connection::getInstance();
                            //echo "select name from categories where id=$rows->category_id";
                            $query = $conn->query("select name from categories where id=$rows->category_id");
                            //lay mot ban ghi
                            $category = $query->fetch();
                            echo isset($category->name) ? $category->name : "";
                            //echo $category->name;
                         ?>
                    </td>
                    <td>
                        <?php 
                            //co the truc tiep truy van csdl o view
                            $conn = Connection::getInstance();
                            //echo "select name from categories where id=$rows->category_id";
                            $query = $conn->query("select name from fields where id=$rows->fields_id");
                            //lay mot ban ghi
                            $field = $query->fetch();
                            echo isset($field->name) ? $field->name : "";
                            //echo $category->name;
                         ?>
                    </td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=products&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                        <a href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=products&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>