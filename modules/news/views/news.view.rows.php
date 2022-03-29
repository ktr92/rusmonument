<?php
/**
 * Шаблон элементов в списке новостей
 * 
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2018 OOO «Диафан» (http://www.diafan.ru/)
 */

if (! defined('DIAFAN'))
{
	$path = __FILE__;
	while(! file_exists($path.'/includes/404.php'))
	{
		$parent = dirname($path);
		if($parent == $path) exit;
		$path = $parent;
	}
	include $path.'/includes/404.php';
}

if(empty($result['rows'])) return false;

?>

<div class="portfolio">
	<div class="row">
	<? //вывод списка новостей
		foreach ($result["rows"] as $row)
		{	 ?>
		<div class="col-lg-4 col-md-6">
			<div class="card">
				<div class="card__img">
						
						<? if (! empty($row["img"]))
						{			
							foreach ($row["img"] as $img)
							{
								switch($img["type"])
								{
									case 'animation':
										echo '<a href="'.BASE_PATH.$img["link"].'" data-fancybox="gallery'.$row["id"].'news" class="block-row-img">';
										break;
									case 'large_image':
										echo '<a href="'.BASE_PATH.$img["link"].'" rel="large_image" width="'.$img["link_width"].'" height="'.$img["link_height"].'" class="block-row-img">';
										break;
									default:
										echo '<a href="'.BASE_PATH_HREF.$img["link"].'" class="block-row-img">';
										break;
								}
								echo '<img src="'.$img["src"].'" width="'.$img["width"].'" height="'.$img["height"].'" alt="'.$img["alt"].'" title="'.$img["title"].'" class="card-img-top">'
								.'</a> ';
							}			
						}	?>
						
				</div>
				<div class="card-body">
					<h4 class="card-title"><?=$row["name"]; ?></h4>
					
					<div class="card__link"><a data-item="<?=$row["link"];?>" data-toggle="modal" data-target="#exampleModal">Подробнее</a></div>
				</div>
			</div>
		</div>
		<? } ?>
		
	</div>
	<div class="showmore"><a href="#" class="btn btn_border btn_border_big">
		<? //Кнопка "Показать ещё"
		if(! empty($result["show_more"]))
		{
			echo $result["show_more"];
		} ?>
	</a></div>
</div>
						
						
	<!-- Modal -->
			<div class="modal fade modal_cards" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				 aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">						
						<div class="modal-body">
							<ul class="nav nav-tabs d-none" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="btn-inmodal-1" data-toggle="tab" href="#inmodal-1" role="tab"
									   aria-controls="home" aria-selected="true">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="btn-inmodal-2" data-toggle="tab" href="#inmodal-2" role="tab"
									   aria-controls="profile" aria-selected="false">Profile</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="btn-inmodal-3" data-toggle="tab" href="#inmodal-3" role="tab"
									   aria-controls="contact" aria-selected="false">Contact</a>
								</li>
							</ul>
							<div class="tab-content">
							
								<? //вывод списка новостей
								foreach ($result["rows"] as $row)
								{	 ?>
								<div class="tab-pane fade show active" id="<?=$row["link"];?>" role="tabpanel" aria-labelledby="home-tab">
									<div class="inmodal">
										<div class="inmodal__item">
											<div class="inmodal__items">
												<div class="inmodal__left">
													<div class="inmodal__photo">
														<div class="inmodal__slidercontainer">
															<div class="inmodal__slider inmodal__sliderto">
															
																<? if (! empty($row["img"]))
																{			
																	foreach ($row["img"] as $img)
																	{																		
																		echo '<div class="inmodal__slide">';																			
																		echo '<img src="'.$img["src"].'" width="'.$img["width"].'" height="'.$img["height"].'" alt="'.$img["alt"].'" title="'.$img["title"].'>';
																		echo '</div>';
																	}			
																}	?>
																
															</div>
															<div class="inmodal__arrows">
																<div class="inmodal__arrow inmodal__arrow_left"><img src="/images/inmodal-left.png" alt=""></div>
															
																<div class="inmodal__arrow inmodal__arrow_right"><img src="/images/inmodal-right.png" alt=""></div>
															</div>
														</div>
														
													</div>
												</div>
												<div class="inmodal__right">
													<div class="inmodal__content">
														<div class="inmodal__textcontent">
															<div class="inmodal__caption">Название</div>
															<div class="inmodal__title"><?=$row['name'];?></div>
														</div>
														<div class="inmodal__textcontent">
															<div class="inmodal__caption">Описание</div>
															<div class="inmodal__text"><?=$row['anons']?></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
								
								<? } ?>
								


						</div>
						<div class="modal-footer">

							<button type="button" class="inmodal-left">
								Предыдущая работа
							</button>
							<button type="button" class="inmodal-right">
								Следующая работа
							</button>


						</div>
					</div>
				</div>
			</div>

<?
/* 
//вывод списка новостей
foreach ($result["rows"] as $row)
{		           
	echo '<div class="news block">';

	//вывод изображений новости
	if (! empty($row["img"]))
	{			
		foreach ($row["img"] as $img)
		{
			switch($img["type"])
			{
				case 'animation':
					echo '<a href="'.BASE_PATH.$img["link"].'" data-fancybox="gallery'.$row["id"].'news" class="block-row-img">';
					break;
				case 'large_image':
					echo '<a href="'.BASE_PATH.$img["link"].'" rel="large_image" width="'.$img["link_width"].'" height="'.$img["link_height"].'" class="block-row-img">';
					break;
				default:
					echo '<a href="'.BASE_PATH_HREF.$img["link"].'" class="block-row-img">';
					break;
			}
			echo '<img src="'.$img["src"].'" width="'.$img["width"].'" height="'.$img["height"].'" alt="'.$img["alt"].'" title="'.$img["title"].'">'
			.'</a> ';
		}			
	}

	echo '<div class="block-text">';
		   
		//вывод названия и ссылки на новость
		echo '<h4>';
			echo '<a href="'.BASE_PATH_HREF.$row["link"].'" class="black">'.$row["name"].'</a>';		
		echo '</h4>';

		//вывод рейтинга новости за названием, если рейтинг подключен
		if (! empty($row["rating"]))
		{
			echo '<div class="news_rating rate"> ' .$row["rating"] . '</div>';
		}

		//вывод анонса новостей
		if(! empty($row["anons"]))
		{
			echo '<div class="news_anons anons">'.$row['anons'].'</div>';
		}

		//вывод даты новости
		if (! empty($row['date']))
		{
			echo '<div class="news_date date">'.$row["date"]."</div>";
		}		

		//вывод прикрепленных тегов к новости
		if(! empty($row["tags"]))
		{
			echo $row["tags"];
		}		

		echo '</div>';

	echo '</div>';
}
 */
