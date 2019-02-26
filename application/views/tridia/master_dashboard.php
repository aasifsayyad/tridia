<header class="topbar-nav">
    <nav class="navbar navbar-expand bg-white">
        <h4>{{pagename}}</h4>    
    </nav>
</header>
<div class="content-wrapper">
    <div class="container-fluid">
      <!--Start Dashboard Content-->
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-5">
              <div class="card">
                <div class="card-body">
                    <div class="form-group">
                         <span class="slect30">
                               <label>Select TUZ :</label>
                          </span>
                          <span class="slectBox70">
                              <select id="elementList" style="width:95%;" class="form-control">
                                <option value="">---Select the TUZ---</option>
                             </select>                         
                         </span>                        
                    </div>                
                </div>
              </div>
            
             <div class="card">
               <div class="card-body">
                   <div class="form-group">
                       <div class="slect30">
                              <label>Start Time :</label>
                         </div>
                       <div class="slect70">
                           <div class="slect50">
                               <input type="text" class="dateTime form-control" autocomplete="off" onchange="getCharts();" data-date-format='yy-mm-dd' style="width:95%;"  id="startDate"  placeholder="Date Time">
                           </div>
                            <div class="slect50">
                                <input type="time" name="starttime" id="startTime" autocomplete="off" style="width:95%;" onchange="getCharts();" step="2" style="" class="time form-control">
                           </div>
                       </div>
                   </div>                
               </div>
             </div>
           
                <div class="card">
                  <div class="card-body">
                      <div class="form-group">
                          <div class="slect30">
                                 <label>End Time :</label>
                            </div>
                          <div class="slect70">
                              <div class="slect50">
                                  <input type="text" class="dateTime form-control" autocomplete="off" onchange="getCharts();" data-date-format='yy-mm-dd' style="width:95%;"  id="endDate"  placeholder="Date Time">
                              </div>
                               <div class="slect50">
                                      <input type="time" name="endtime" id="endTime" autocomplete="off" style="width:95%;" onchange="getCharts();" step="2" style="" class="time form-control">
                              </div>
                          </div>
                      </div>                   
                  </div>
                </div>            
                
                <div class="card tabDiv">
                   <div class="card-body scrollbar" id="style-3">      
                       <div class="col-12 tableAttributes">   
                       </div>
                   </div>
                </div>
             </div>         
          <div class="col-12 col-lg-12 col-xl-7 tabDiv card card-body">     
                        <iframe class="iframeMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d167998.10803373056!2d2.206977064368058!3d48.858774103123785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1542603994587"  allowfullscreen="">
                        </iframe>
                   
          </div>
      </div>      
      <div class="row tabDiv">
           <div class="col-12 col-lg-6 col-xl-2 ChildAttrs">
                <div class="card">
                    <div class="card-body chartDiv scrollbar" id="style-1">
                        <ul id="attributesListLeft"></ul> 
                    </div>
               </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-10 mainChart">
                <div class="card">
                    <div class="card-body chartDiv">
                        <div id="container" class="chartContainer"></div>
                        <div id="eventFrame" class="eventFrameContainer scrollbar"></div>
                    </div>
                </div>
            </div>
      </div>
    <!--End Row-->
    <!--End Dashboard Content-->
    </div>
    <!-- End container-fluid-->
    <div class="container-fluid">
        <div class="row" id="cellGraphList">
        </div>     
    </div>
</div>
