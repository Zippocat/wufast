        <div class="Content">
            <?php
                if(isset($alert) && !empty($alert))
                {
                    print "<script>alert('$alert')</script>";
                }
            ?>
            <br />
            <div class="centr">
                <h5>Статистика</h5>
                <samp>Amount For Day: </samp><?= $stat['AmountForDay'] ?><br />
                <samp>Amount For Week: </samp><?= $stat['AmountForWeek'] ?><br />
                <samp>Amount For Month: </samp><?= $stat['AmountForMonth'] ?><br />
                <samp>Amount For AllTime: </samp><?= $stat['AmountForAllTime'] ?><br />
                <form action="" method="post">
                    <input type="hidden" name="action" value="ResetStatistic"/>
                    <br />
                    <button>Сбросить статистику</button>
                </form>
            </div>
            <br />
            <br />
            <div class="centr">
            
                <form action="" method="post">
                    <input type="hidden" name="action" value="AdminChangeSMS"/>
                    <input type="hidden" name="id" value="1"/>
                    <h5>Номер телефона</h5>
                    <div>
                        <input type='text' name="PhoneNumber" placeholder="Телефон" value="<?= $PhoneNumber ?>"/>                      
                    </div>
                    <br />
                    <button>Сменить номер</button>
                </form>
                
                <br />
            </div>
            <hr/>
            
            <div class="centr">
                <form action="" method="post">
                    <input type="hidden" name="action" value="AdminCreateNews"/>
                    <h5>Создать уведомление</h5><br />
                    <span>Текст уведомления: </span>
                    <div>
                        <textarea rows='5' cols='40' name="newstext" maxlength="1000"></textarea>                        
                    </div>  
                    <br />
                    <button>Создать уведомление</button>
                </form>
                <br />
            </div>
            <hr/>
            
            <br />
            <div class="centr">
                <form name="Search" action="" method="post">
                    <input type="hidden" name="action" value="AdminSearch"/>
                    Поиск: 
                    <input type="Search" name="Search" placeholder="Search" />
                    <input type="submit" value=">" />
                </form>
                <br />
            </div>
            <hr/>
            
        </div>