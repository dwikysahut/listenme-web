	<div class="menu-btn">
     <i class="fas fa-bars"></i>
   </div>
   <div class="side-bar">
     <div class="close-btn">
       <i class="fas fa-times"></i>
     </div>
     <div class="menu">
       <?php if($this->session->userdata('logged_in')==true ): ?>
     <div id="img1" class="item1">
    <img src="https://ui-avatars.com/api/?name=<?php echo $this->session->userdata('name')?>" height="150" width="150">
    <center><span><?php echo $this->session->userdata('name')?></span></center>
    
    </div>
    <div class="item"><a href="<?php echo base_url('home') ?>"><i class="fas fa-headphones"></i>Home</a></div>
    <?php if($this->session->userdata('id_status')==2 ): ?>
       <div class="item"><a href="<?php echo base_url('track_list/playlist/'.$this->session->userdata('id_user')) ?>"><i class="fas fa-play"></i>My Playlist</a></div>
       <?php else: ?>
        <div class="item"><a href="<?php echo base_url('upgrade/') ?>"><i class="fas fa-angle-double-up"></i>Upgrade to Premium</a></div>
        <?php endif; ?>
    <?php else: ?>
      <div class="item"><a href="<?php echo base_url('auth/login') ?>"><i class="fas fa-sign-in-alt"></i>Login</a></div>
    <?php endif; ?>
   
      
       <!-- <div class="item">
         <a class="sub-btn"><i class="fas fa-table"></i>Tables<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" class="sub-item">Sub Item 01</a>
           <a href="#" class="sub-item">Sub Item 02</a>
           <a href="#" class="sub-item">Sub Item 03</a>
         </div>
       </div>
       <div class="item"><a href="#"><i class="fas fa-th"></i>Forms</a></div>
       <div class="item">
         <a class="sub-btn"><i class="fas fa-cogs"></i>Settings<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" class="sub-item">Sub Item 01</a>
           <a href="#" class="sub-item">Sub Item 02</a>
         </div>
       </div>
       <div class="item"><a href="#"><i class="fas fa-info-circle"></i>About</a></div> -->
     </div>
   </div>
  