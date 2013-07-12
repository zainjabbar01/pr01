<style>
	.active-tab{ background: #eee; }
</style>
<div class="accordion" id="accordion2">
        <div class="accordion-group">
                <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Profile</a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                        <div class="accordion-inner">
                                <ul>
                                        <li <?php if($page=='supplier_info'){ ?> class="active-tab" <?php } ?>><a href="<?php echo base_url();?>main/user/supplier_info">Supplier Information</a></li>
                                        <li <?php if($page=='company_info'){ ?> class="active-tab" <?php } ?>><a href="<?php echo base_url();?>main/user/company_info">Company Information</a></li>
                                        <li <?php if($page=='company_revenue'){ ?> class="active-tab" <?php } ?>><a href="<?php echo base_url();?>main/user/company_revenue">Company Revenue</a></li>
                                        <li <?php if($page=='company_contact'){ ?> class="active-tab" <?php } ?>><a href="<?php echo base_url();?>main/user/company_contact">Company Contact Info</a></li>
                                        <li <?php if($page=='license'){ ?> class="active-tab" <?php } ?>><a href="<?php echo base_url();?>main/user/license">Licences & Certificates</a></li>
                                        <li <?php if($page=='services'){ ?> class="active-tab" <?php } ?>><a href="<?php echo base_url();?>main/user/services">Products & Services</a></li>
                                        <li><a href="#">Certifications</a></li>                                
                                </ul>
                        </div>
                </div>
        </div>

        <div class="accordion-group">
                <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Search Corporations</a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                        <div class="accordion-inner">
                                Anim pariatur cliche...
                        </div>
                </div>                                       
        </div>

        <div class="accordion-group">
                <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Membership</a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                        <div class="accordion-inner">
                                Anim pariatur cliche...
                        </div>
                </div>                                       
        </div>

        <div class="accordion-group">
                <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">Advance Search</a>
                </div>
                <div id="collapseFour" class="accordion-body collapse">
                        <div class="accordion-inner">
                                Anim pariatur cliche...
                        </div>
                </div>                                       
        </div>

        <div class="accordion-group">
                <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">Corporation Update</a>
                </div>
                <div id="collapseFive" class="accordion-body collapse">
                        <div class="accordion-inner">
                                Anim pariatur cliche...
                        </div>
                </div>                                       
        </div>

        <div class="accordion-group">
                <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">Capability Statement</a>
                </div>
                <div id="collapseSix" class="accordion-body collapse">
                        <div class="accordion-inner">
                                Anim pariatur cliche...
                        </div>
                </div>                                       
        </div>

        <div class="accordion-group">
                <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven">Notifications</a>
                </div>
                <div id="collapseSeven" class="accordion-body collapse">
                        <div class="accordion-inner">
                                Anim pariatur cliche...
                        </div>
                </div>                                       
        </div>
</div>