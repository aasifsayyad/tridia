<header class="topbar-nav">
    <nav class="navbar navbar-expand bg-white">
        <h4>{{pagename}}</h4>    
    </nav>
</header>
<div class="content-wrapper">
    <div class="container-fluid">
      <!--Start Dashboard Content-->
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-4">
              <div class="card">
                <div class="card-body">
                    <div class="form-group">
                         <span class="slect30">
                               <label>Select Block :</label>
                          </span>
                          <span class="slectBox70">
                              <select id="elementList" style="width:95%;" class="form-control">
                                <option value="">---Select the Block---</option>
                             </select>                         
                         </span>                        
                    </div>                
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4">
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
           </div>
            <div class="col-12 col-lg-6 col-xl-4">
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
            </div>          
        </div>     
      <div class="row tabDiv">
          <div class="col-12 col-lg-12 col-xl-7">
               <div class="card">
                    <div class="card-body scrollbar" id="style-3">      
                        <div class="col-12 tableAttributes">   
                        </div>
                    </div>
                </div>
          </div>  
          <div class="col-12 col-lg-12 col-xl-5">
               <div class="card">
                   <div class="card-body" id="maapp">      
                        <iframe class="iframeMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242118.14199614953!2d73.72288117003453!3d18.524564859944654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1550223419709" width="600" height="450" frameborder="0" style="border:0">
                        </iframe>
                    </div>
                </div>
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
      <div class="row tabDiv">        
            <div class="col-12 col-lg-6 col-xl-8">              
                <div class="card map">
                    <div class="card-body" id="iframeLoad">      
                        <iframe class="iframeMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d167998.10803373056!2d2.206977064368058!3d48.858774103123785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1542603994587"  allowfullscreen="">
                        </iframe>
                    </div>
                </div>
            </div>
           <div class="col-12 col-lg-6 col-xl-4">     
                <div class="card">
                    <div class="card-body addcellcls">
                         <div class="form-group elementsCell">                         
                          <span class="slect60">
                              <select id="elementChildList" class="form-control">
                                <option value="">---Select Elements---</option>
                             </select>                         
                         </span>  
                          <span class="slect40">
                              <button class="btn btn-primary" onclick="addCell();" id="addCellGraph">Add Producer</button>
                          </span>
                    </div>  
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
