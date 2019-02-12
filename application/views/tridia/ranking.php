<header class="topbar-nav">
    <nav class="navbar navbar-expand bg-white">
        <h4>{{pagename}}</h4>    
    </nav>
</header>
<div class="content-wrapper">
    <div class="container-fluid">
      <!--Start Dashboard Content-->
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">  
                        <label>Select Zone :</label>
                        <select id="parentTemplateList" onchange="getData();"  style="width:95%;" class="form-control">
                            <option value="" selected="" disabled="">---Select Zone---</option>
                        </select>                 
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <label>Select Type of Asset:</label>
                        <select id="blockList"  onchange="getData();" style="width:95%;" class="form-control">
                          <option value="CELL">CELL</option>
                          <option value="TUZ">TUZ</option>
                        </select>                 
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">                           
                        <label class="slect100">Select Date : </label>             
                        <div class="slect100">
                            <input type="text" class="dateTime form-control" onchange="getData();"  autocomplete="off"  data-date-format='yy-mm-dd' style="width:95%;"  id="todaysDate"  placeholder="Date Time">
                        </div>
                   </div>                
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body"> 
                        <label>Select Parameter : </label>
                        <select id="parameterList" onchange="loadTable();" style="width:95%;" class="form-control">
                        </select>               
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-6">
                             <div class="card tbleContainer">
                                 <div class="card-body">
                                      <div class="table-responsive" id="topTable"></div>
                                 </div>
                             </div>
                            <div class="card tbleContainer">
                                 <div class="card-body">
                                       <div class="table-responsive" id="bottomTable"></div>
                                 </div>
                             </div>                  
            </div>
            
            <div class="col-12 col-lg-6 col-xl-6">
                <div class="card filterContainer" >
                    <div class="card-body">                         
                        <div id="filterAdd">
                             <button class="btn btn-primary" style="width:30%;" id="addExpress"><i class="ti-plus"></i> Add Expression</button>
                        </div>
                        <button class="btn btn-primary" id="reloadTable" style="float: right;display: none;"><i class="ti-reload"></i> Submit</button>  
                    </div>
                </div>
            </div>                    
        </div>
      
    <!--End Row-->
    <!--End Dashboard Content-->
    </div>  
</div>
