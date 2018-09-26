<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Recipes</h1>
        </div>
        <div class="col-md-6 ">
            <table class=" table datatable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>Desc</th>
                    <th>Proc</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($recipes as $recipe) { ?>
                    <tr>
                        <td><?php echo $recipe["id"] ?> </td>
                        <td><?php echo $recipe["name"] ?> </td>
                        <td><?php echo $recipe["description"] ?> </td>
                        <td><?php echo $recipe["procedure"] ?> </td>
                    </tr>

                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
