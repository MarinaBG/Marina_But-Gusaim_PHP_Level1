<?  
    include "config.php";

    $sql = "select * from images order by views DESC";
    
    $res = mysqli_query($connect, $sql);
    
    while($data = mysqli_fetch_assoc($res)) {
        $address = $data['address'];
        $id = $data['id'];
        $views = $data['views'];
        echo "<a href='#modal_form' id='imgBig_".$id."' onclick='showBigImg(\"".$address."\",".$views."); updateViews(\"".$id."\");'><img id='imgSmall_".$id."' src='img/small/".$address."' alt='no foto'></a>";
    }
?>