<div class="row">
      <div class="col-sm"></div>
      <div class="col-sm">
          <div class="form-login">
            <h3>Login</h3><br><br>
            <?php
                echo form_open('auth/login');
             ?>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="Masukan username">
                </div>
              </div>
              <br>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Masukan password">
                </div>
              </div>
              <br><br>
              <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" name="submit" class="btn btn-primary">Masuk</button>
                </div>
              </div>
            </form>
            <br>
            <div class="text-center">
              <p>Belum Punya akun ? <a href="<?php echo site_url('auth/register'); ?>">Daftar</a> </p><br>
            </div>
          </div>
      </div>
      <div class="col-sm"></div>
    </div>
