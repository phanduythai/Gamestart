<!DOCTYPE html>
<html>
<head>
    <?php
    require 'data.php';
    ?>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <form class="title">
        ID <input type="txt" name='Inp' placeholder="Search...."/>
        <input type="submit" value="Tìm kiếm" />
    </form>
    <?php if (empty($_GET['Inp'])) 
    {
        echo "Nhập tìm kiếm";
    }
    else
    {
        for ($i=0; $i < 5 ; $i++) 
        { 
            if($users[$i]['id']== $_GET['Inp'] )
                {?>
                   <table>
                    <tr>
                        <tr>
                            <td>----ID----</td>
                            <td>-------Name-------</td>
                            <td>-------Gmail-------</td>
                            <td class="boder">-------Yahoo-------</td>
                        </tr>
                        <tr>

                            <td class="boder"><?php echo $users[$i]['id']; ?> </td>
                            <td class="boder"><?php echo $users[$i]['name']; ?></td>
                            <td class="boder"><?php echo $users[$i]['email']['gmail']; ?></td>
                            <td class="boder"><?php echo $users[$i]['email']['yahoo']; ?></td>
                        </tr>
                    </tr>
                </table>
                <?php 
                break;
            }
            else
            {
                if($i==4)
                {
                    echo "Không tìm được!";
                }
            }
        }
    }
    ?>
</body>
</html>