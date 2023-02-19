
<?php
include "header.php";
include "Config.php";

?>
                    
                                
                     <!-- start page title -->
                     <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                            <li class="breadcrumb-item active">Starter</li>
                                        </ol>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->             





                        
                        <div class="row">                      
                            <div class="col-lg-12">                            
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Movies</h2>                                     
                                 <?php
                                    // $sql="SELECT * FROM online_movie_sys_movie
                                    // ORDER BY online_movie_sys_movie.movie_id DESC";         // DESC decending Order
                    
                                    
                    $sql="SELECT *,online_movie_sys_genre.genre_name,online_movie_sys_genre.genre_id FROM online_movie_sys_movie 
                    LEFT JOIN online_movie_sys_genre ON online_movie_sys_movie.genre_id = online_movie_sys_genre.genre_id";


                                    $result=mysqli_query($conn,$sql) or die("Query Failed");
                                    if (mysqli_num_rows($result) > 0){                       

                                ?>
                            <table  class="table table-bordered table-centered mb-0" >
                                <thead>
                                    <tr>
                                        <th>Movie Id</th>
                                        <th>Movie Name</th>
                                        <th>Image</th>
                                        <th>Release Date</th>
                                        <th>Trailer</th>
                                        <th>Description</th>
                                        <th>Genre</th>                                        
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php while ($row = mysqli_fetch_assoc($result )) {   ?>
                                        <tr>
                                            
                                            <td class='id'><?php echo $row['movie_id'];?> </td>
                                            <td><?php echo $row['movie_name'];?> </td>
                                            
                                            <td><img src="upload/<?php echo $row['Mov_img']; ?>" width="70px" alt=""/></td>
                                            <td><?php echo $row['release_date'];?> </td>                                            
                                            <td>

                                                                                  
                                            </td>
                                            <td><?php echo substr($row['descrpt'],0,50) ;?> </td>
                                            
                                            <td><?php echo $row['genre_id'];?> </td>
                                            <td class='edit'><a href='Update_Movie.php?id=<?php echo $row['movie_id'];?>'><i class='mdi mdi-pencil'></i></a></td>

                                            <td class='delete'><a href='Delete_Movie.php?id=<?php echo $row['movie_id'];?>'><i class='mdi mdi-delete'></i></a></td>

                                            
                                        </tr> 
                                    <?php  } ?> 

                                </tbody>
                            </table>

               

                            <?php  } ?>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                        <!-- end row -->

                        <?php
                                include "footer.php";
                        ?>
                        