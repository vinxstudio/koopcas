<template>
    <div class="container form-row align-items-stretch">
            <div action="form-group">
                <label for="client_id">Client ID:</label>
                <input type="text" class="form-control" name="client_id"></input>

                <label for="alert_level">Alert Level:</label>
                <input type="text" class="form-control" name="alert_level"></input>
            </div>
            <div action="form-group">
                <label for="reference_id">Reference ID:</label>
                <input type="text" class="form-control" name="reference_id"></input>

                <label for="department">Department:</label>
                <input type="text" class="form-control" name="department"></input>
            </div>
    </div>

</template>

<style>
.container {
    border: 1px solid #fff;
    width: 100%;
    height: 300px;
    background-color: #fff;
}

</style>