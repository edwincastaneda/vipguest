<?php
$cards = true;
?>
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>		


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Cards</li>
        </ol>
    </div><!--/.row-->
<br/>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Manage My Cards</div>
                <div class="panel-body">
                    <form class="form-horizontal" action="" method="post">
                        <fieldset>
                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Name</label>
                                <div class="col-md-9">
                                    <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                </div>
                            </div>

                            <!-- Email input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email">Your E-mail</label>
                                <div class="col-md-9">
                                    <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                                </div>
                            </div>

                            <!-- Message body -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Your message</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <div class="panel-footer text-right">
                        <button type="submit" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus"></span> Add</button>
                    <button type="submit" class="btn btn-success btn-md"><span class="glyphicon glyphicon-floppy-disk"></span> Update</button>
                    <button type="submit" class="btn btn-danger btn-md"><span class="glyphicon glyphicon-remove"></span> Remove</button>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">My Cards</div>
                <div class="panel-body">
                    <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th data-field="state" data-checkbox="true" >Item ID</th>
                                <th data-field="id" data-sortable="true">Item ID</th>
                                <th data-field="name"  data-sortable="true">Item Name</th>
                                <th data-field="price" data-sortable="true">Item Price</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>	<!--/.main-->

<?php include "footer.php"; ?>
</body>

</html>
