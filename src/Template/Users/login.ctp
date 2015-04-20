<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Please Sign In</h3>
            </div>
            <div class="panel-body">
                <?= $this->Form->create(null,['role' => 'form']) ?>
                <form role="form">
                    <fieldset>
                        <div class="form-group">
                            <?= $this->Form->email('email',['class' => 'form-control','placeholder' => 'Email', 'autofocus']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->password('password',['class' => 'form-control','placeholder' => 'Password']) ?>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div>
                        <?= $this->Form->button('Login',['class' => 'btn btn-lg btn-success btn-block']) ?>
                    </fieldset>
                    <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>