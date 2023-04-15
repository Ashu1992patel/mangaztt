<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Form validation in laravel 5.6 using vue js and axios with example</div>


                <div class="panel-body" id="app">
                    <form method="POST" action="{{URL('create-category')}}" class="form-horizontal" @submit.prevent="onSubmit">
                        {{ csrf_field() }}

                        <div :class="['form-group', errors.name ? 'has-error' : '']" >
                            <label for="name" class="col-sm-4 control-label">Name</label>
                            <div class="col-sm-6">
                                <input id="name" name="name" value=""  autofocus="autofocus" class="form-control" type="text" v-model="form.name">
                                <span v-if="errors.name" :class="['label label-danger']">@{{ errors.name[0] }}</span>
                            </div>
                        </div>
                        <div :class="['form-group', errors.description ? 'has-error' : '']" >
                            <label for="description" class="col-sm-4 control-label">Description</label>
                            <div class="col-sm-6">
                                <input id="description" name="description"  class="form-control" type="text" v-model="form.description">
                                <span v-if="errors.description" :class="['label label-danger']">@{{ errors.description[0] }}</span>
                            </div>
                        </div>
                        <center><input type="submit" value="Add Category" class="btn btn-primary"></center>

                        <span v-if="success" :class="['label label-success']">Successfully added!</span>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    const app = new Vue({
        el: '#app',
        data: {
            form: {
                name : '',
                description : '',
            },
            errors: [],
            success : false,
        },
        methods : {
            onSubmit: function(e) {


                formdata = new FormData();
                formdata.append('name', this.form.name);
                formdata.append('description', this.form.description);
                console.log(e.target.action);


                axios.post(e.target.action, formdata).then( response => {
                    this.errors = [];
                this.form.name = '';
                this.form.description = '';
                this.success = true;
            }).catch((error) => {
                    this.errors = error.response.data.errors;
                this.success = false;
            });
            }
        }
    });
</script>
</body>
</html>