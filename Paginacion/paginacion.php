        <?php if ($productos<$productosTotal): ?>
            <!-- PAGINACION -->
            <div id='verPag'>
                <div>
                    <div class="pages">
                        <ul class="pagination">
                           <!-- anterior -->
                            <li>
                                    <?php
                                if ($inicio==0){
                                    echo "<a href=>&laquo;</a> ";
                                } else {
                                    $idProductonterior=$inicio-$productos;
                                    if ($categoria=="") {
                                      echo "<a class='active' href=index.php?pos=$idProductonterior&pro=$productos&&ord=$order>&laquo;</a>";
                                        } else{
                                        echo "<a href=index.php?pos=$idProductonterior&pro=$productos&cat=$categoria&mar=$marca&ord=$order>&laquo;</a>";
                                    }
                                }
                                ?>
                            </li>
                            <!-- NUMEROS -->
                            <li>
                                <?php
                                $pagina=0; // Pagina actual en la que estamos
                                $proximo = 0; // Cantidad de productos que se van a mostrar, se asigna a posicion
                                $total = $productosTotal; // Total de productos que aun nos queda por mostrar
                                $paginaActiva = ($inicio/$productos)+1; // Comprobar pagina activa con pagina actual
                                $ult_pagina = floor($productosTotal/$productos+1); // Ultima pagina
                                while($total>0){
                                    $total -= $productos;
                                    $pagina++;
                                    ?>
                                    <?php if (floor($paginaActiva)==$pagina): ?>
                                        <!-- Primera pagina y puntos a partir del 2 -->
                                        <?php if ($pagina>2): ?>
                                            <li>
                                                <a href=index.php?cat=<?php echo $categoria; ?>&mar=<?php echo $marca; ?>&pos=0&pro=<?php echo $productos ?>&ord=<?php echo $order;?>>1</a>
                                            </li>
                                        <?php endif ?>
                                        <?php if ($pagina>3): ?>
                                            <li>
                                                <a href=''>...</a>
                                            </li>
                                        <?php endif ?>
                                        <!-- numero anterior -->
                                        <?php if ($pagina>1): ?>
                                            <li>
                                                <a href=index.php?cat=<?php echo $categoria; ?>&mar=<?php echo $marca; ?>&pos=<?php echo $proximo-$productos;?>&pro=<?php echo $productos ?>&ord=<?php echo $order;?>><?php echo $pagina-1;?></a>
                                            </li>
                                        <?php endif ?>
                                        <!-- Pagina Activa -->
                                        <?php if ($categoria==""): ?>
                                            <li class="active">
                                                <a href=index.php?cat=<?php echo $categoria; ?>&mar=<?php echo $marca; ?>&pos=<?php echo $proximo;?>&pro=<?php echo $productos ?>&ord=<?php echo $order;?>><?php echo $pagina;?></a>
                                            </li>
                                            <?php else: ?>
                                                <li class="active">
                                                    <a href=index.php?cat=<?php echo $categoria; ?>&mar=<?php echo $marca; ?>&pos=<?php echo $proximo;?>&pro=<?php echo $productos ?>&cat=<?php echo $categoria ?>&ord=<?php echo $order;?>><?php echo $pagina;?></a>
                                                </li>
                                            <?php endif ?>
                                            <!-- Ultima pagina y puntos a partir del ... -->
                                            <?php if ($pagina<(($ult_pagina-1))):
                                                $variableACD = 1;?>
                                                <li>
                                                    <a href=index.php?cat=<?php echo $categoria; ?>&mar=<?php echo $marca; ?>&pos=<?php echo $proximo+$productos;?>&pro=<?php echo $productos ?>&ord=<?php echo $order;?>><?php echo $pagina+1;?></a>
                                                </li>
                                            <?php endif ?>
                                            <?php if ($pagina<($ult_pagina-2)): ?>
                                                <li>
                                                    <a href=''>...</a>
                                                </li>
                                            <?php endif ?>
                                            <?php if ($pagina<$ult_pagina):?>
                                                <li>
                                                    <a href=index.php?cat=<?php echo $categoria; ?>&mar=<?php echo $marca; ?>&pos=<?php echo $productos*floor($productosTotal/$productos); ?>&pro=<?php echo $productos ?>&ord=<?php echo $order;?>><?php echo $ult_pagina; ?></a>
                                                </li>
                                            <?php endif ?>
                                        <?php endif ?>
                                        <?php
                                        if($productos==12) 
                                            $proximo += 12;
                                        if($productos==24) 
                                            $proximo += 24;
                                    }
                                    ?>
                                </li>
                                <!--  SIGUIENTE  -->
                                <li>
                                    <?php
                                    if ($productosImpresos==$productos) {
                                        $proximo=$inicio+$productos;
                                        if ($categoria=="") {
                                            echo "<a href=index.php?pos=$proximo&pro=$productos&ord=$order>&raquo;</a>"; 
                                        }else{
                                            echo "<a href=index.php?cat=$categoria&mar=$marca&pos=$proximo&pro=$productos&ord=$order>&raquo;</a>";
                                        }
                                    }else
                                    echo "<a href=>&raquo;</a>"; 
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div id='verPag'>
                <div>
                    <div class="pages">
                        <ul class="pagination">
                           <!-- anterior -->
                           <li class="active">
                                <a href=>1</a>
                            </li>
                        </ul>

                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?> 