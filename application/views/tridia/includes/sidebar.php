 <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo" ng-click="setMaster('Home')">
            <a href="#!Home">
                <h5 class="logo-icon logo-text"><img src="<?php echo base_url();?>assets/images/favicon.png" class="logo-icon" alt="ECG" style="width:65px" />ECGiT</h5>
            </a>
        </div>
    <ul class="sidebar-menu do-nicescrol">
          <li class="sidebar-header"></li>       
          <li ng-class="{active : isSelected('Home')}">
              <a href="#!Home" ng-click="setMaster('Home')" class="waves-effect">
                <i class="ti-home"></i> <span>Home</span>
              </a>
          </li>
          <li ng-class="{active : isSelected('Master')}">
              <a href="#!Master" ng-click="setMaster('Master')" class="waves-effect">
                <i class="ti-layout-grid2"></i> <span>Master Dashboard</span>
              </a>
          </li>
          <li  ng-class="{active : isSelected('AssetDesign')}">
              <a href="#!AssetDesign" ng-click="setMaster('AssetDesign')" class="waves-effect">
                  <i class="ti-direction-alt"></i> Asset Association
              </a>
          </li>
          <li  ng-class="{active : isSelected('Allocation')}">
              <a href="#!Allocation" ng-click="setMaster('Allocation')" class="waves-effect">
                  <i class="ti-layout-slider"></i> Allocation Block-Plant
              </a>
          </li> 
		  <li ng-class="{active : isSelected('BlockMagistral')}">
              <a href="#!BlockMagistral" ng-click="setMaster('BlockMagistral')" class="waves-effect">
                  <i class="ti-layout-grid2"></i> <span>Block Magistral</span>
              </a>
          </li>
          <li ng-class="{active : isSelected('Chronicles')}">
              <a href="#!Chronicles" ng-click="setMaster('Chronicles')" class="waves-effect">
                  <i class="ti-bar-chart-alt"></i> <span>Chronicles</span>
              </a>
          </li>
          <li ng-class="{active : isSelected('Ranking')}">
              <a href="#!Ranking" ng-click="setMaster('Ranking')" class="waves-effect">
                  <i class="ti-list-ol"></i> <span>Ranking</span>
              </a>
          </li>
          <li ng-class="{active : isSelected('Charts')}">
              <a href="#!Charts" ng-click="setMaster('Charts')" class="waves-effect">
                  <i class="ti-pie-chart"></i> <span>Charts</span>
              </a>
          </li>
          <li>
              <a href="<?php echo base_url();?>Home/logout" class="waves-effect">
                  <i class="ti-power-off"></i> <span>Logout</span>
              </a>
          </li>
    </ul>	 
 </div>    