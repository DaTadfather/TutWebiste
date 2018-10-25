<div>
        <h5 style="border-bottom: solid lightgrey;">INTRO INTO PROGRAMMING</h5>  
        <!-- Tutorial List -->
          <ol type="1" class="mdl-list">
       
           <!-- Server Query 
                Get the tutorial ID, title and author from the server 
           -->
            <?php 
              
                $sql = "SELECT tut_id, title, data, author FROM tutorial WHERE topic=1";
                $result = mysqli_query($conn, $sql);
        
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        
                        echo<<<END
                        <li class="mdl-list__item
                                   mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">

                                <!-- title -->
                                <span>
                                    <a 
                                        style="text-decoration:none;
                                                color:black;" 
                                      onClick="dom(this.id)" 
                                           id="$row[tut_id]"  
                                         href="#" return false>
                                        $row[title]
                                    </a>
                                </span>

                                <span 
                                    class="mdl-list__item-sub-title">author: $row[author]
                                    
                                </span>
                            </span>                               
                        </li>
END;

                    }
                        
                    
                }
            ?>
             <!-- End. Server Query -->
        </ol>
         <!-- End. Tutorial List -->  
</div>


<div>
        <h5 style="border-bottom: solid lightgrey;">COMPUTER SCIENCE BASICS</h5>  
        <!-- Tutorial List -->
          <ol type="1" class="mdl-list">
       
           <!-- Server Query 
                Get the tutorial ID, title and author from the server 
           -->
            <?php 
              
                $sql = "SELECT tut_id, title, data, author FROM tutorial WHERE topic=2";
                $result = mysqli_query($conn, $sql);
        
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        
                        echo<<<END
                        <li class="mdl-list__item
                                   mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">

                                <!-- title -->
                                <span>
                                    <a 
                                        style="text-decoration:none;
                                                color:black;" 
                                      onClick="dom(this.id)" 
                                           id="$row[tut_id]"  
                                         href="#" return false>
                                        $row[title]
                                    </a>
                                </span>

                                <span 
                                    class="mdl-list__item-sub-title">author: $row[author]
                                    
                                </span>
                            </span>                               
                        </li>
END;

                    }
                        
                    
                }
            ?>
             <!-- End. Server Query -->
        </ol>
         <!-- End. Tutorial List -->  
</div>


<div>
        <h5 style="border-bottom: solid lightgrey;">SCL PROGRAMMING</h5>  
        <!-- Tutorial List -->
          <ol type="1" class="mdl-list">
       
           <!-- Server Query 
                Get the tutorial ID, title and author from the server 
           -->
            <?php 
              
                $sql = "SELECT tut_id, title, data, author FROM tutorial WHERE topic=3";
                $result = mysqli_query($conn, $sql);
        
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        
                        echo<<<END
                        <li class="mdl-list__item
                                   mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">

                                <!-- title -->
                                <span>
                                    <a 
                                        style="text-decoration:none;
                                                color:black;" 
                                      onClick="dom(this.id)" 
                                           id="$row[tut_id]"  
                                         href="#" return false>
                                        $row[title]
                                    </a>
                                </span>

                                <span 
                                    class="mdl-list__item-sub-title">author: $row[author]
                                    
                                </span>
                            </span>                               
                        </li>
END;

                    }
                        
                    
                }
            ?>
             <!-- End. Server Query -->
        </ol>
         <!-- End. Tutorial List -->  
</div>


<div>
        <h5 style="border-bottom: solid lightgrey;">C++ PROGRAMMING</h5>  
        <!-- Tutorial List -->
          <ol type="1" class="mdl-list">
       
           <!-- Server Query 
                Get the tutorial ID, title and author from the server 
           -->
            <?php 
              
                $sql = "SELECT tut_id, title, data, author FROM tutorial WHERE topic=4";
                $result = mysqli_query($conn, $sql);
        
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        
                        echo<<<END
                        <li class="mdl-list__item
                                   mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">

                                <!-- title -->
                                <span>
                                    <a 
                                        style="text-decoration:none;
                                                color:black;" 
                                      onClick="dom(this.id)" 
                                           id="$row[tut_id]"  
                                         href="#" return false>
                                        $row[title]
                                    </a>
                                </span>

                                <span 
                                    class="mdl-list__item-sub-title">author: $row[author]
                                    
                                </span>
                            </span>                               
                        </li>
END;

                    }
                        
                    
                }
            ?>
             <!-- End. Server Query -->
        </ol>
         <!-- End. Tutorial List -->  
</div>


<div>
        <h5 style="border-bottom: solid lightgrey;">ADVANCED C++ PROGRAMMING</h5>  
        <!-- Tutorial List -->
          <ol type="1" class="mdl-list">
       
           <!-- Server Query 
                Get the tutorial ID, title and author from the server 
           -->
            <?php 
              
                $sql = "SELECT tut_id, title, data, author FROM tutorial WHERE topic=5";
                $result = mysqli_query($conn, $sql);
        
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        
                        echo<<<END
                        <li class="mdl-list__item
                                   mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">

                                <!-- title -->
                                <span>
                                    <a 
                                        style="text-decoration:none;
                                                color:black;" 
                                      onClick="dom(this.id)" 
                                           id="$row[tut_id]"  
                                         href="#" return false>
                                        $row[title]
                                    </a>
                                </span>

                                <span 
                                    class="mdl-list__item-sub-title">author: $row[author]
                                    
                                </span>
                            </span>                               
                        </li>
END;

                    }
                        
                    
                }
            ?>
             <!-- End. Server Query -->
        </ol>
         <!-- End. Tutorial List -->  
</div>
