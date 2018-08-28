<?php

/**
 * This is the model class for table "facebook_data".
 *
 * The followings are the available columns in table 'facebook_data':
 * @property string $idfacebook_data
 * @property string $nombre_anuncio
 * @property string $entrega
 * @property string $resultados
 * @property string $indicador_resultados
 * @property string $alcance
 * @property string $costo_resultados
 * @property string $importe_gastado
 * @property string $puntuacion_relevancia
 * @property string $personas_acciones
 * @property string $me_gusta_pagina
 * @property string $id_cuenta
 * @property string $nombre_cuenta
 * @property string $id_anuncio
 * @property string $finalizacion
 * @property string $clicks_boton
 * @property string $porcentaje_visualizacion_canvas
 * @property string $tiempo_visualizacion_canvas
 * @property string $id_campana
 * @property string $nombre_campana
 * @property string $id_conjunto_anuncios
 * @property string $nombre_conjunto_anuncios
 * @property string $click_todos
 * @property string $costo_mejora_estimada
 * @property string $costo_cualquier_accion
 * @property string $costo_click_unico
 * @property string $cpc_todos
 * @property string $cpm_impresiones
 * @property string $costo_mil_personas
 * @property string $ctr_todos
 * @property string $inicio_informe
 * @property string $fin_informe
 * @property string $mejora_estimada_recuerdo
 * @property string $indice_mejora_estimada
 * @property string $frecuencia
 * @property string $impreciones
 * @property string $comentarios_positivos
 * @property string $comentarios_negativos
 * @property string $proporcion_resultados
 * @property string $clics_sociales
 * @property string $impresiones_sociales
 * @property string $alcance_social
 * @property string $importe_gastado_hoy
 * @property string $impresiones_en_bruto
 * @property string $valor_conversion_total
 * @property string $acciones
 * @property string $clics_unicos_todos
 * @property string $ctr_unicos_todos
 * @property string $ctr_unico_porcentaje
 * @property string $clics_socilaes_unicos_todos
 * @property string $valor_conversiones_accion_aplicacion
 * @property string $valor_conversion_articulos_carrito_aplicacion
 * @property string $valor_conversion_artuculos_wishlist_aplicacion
 * @property string $valor_conversion_visualizacion_aplicacion
 * @property string $valor_conversion_pagos_iniciados_aplicacion
 * @property string $valor_conversion_compras_aplicacion
 * @property string $valor_conversion_calificaciones_unicas_aplicacion
 * @property string $valor_conversion_gastos_creditos_aplicacion
 * @property string $valor_conversion_gastos_creditos
 * @property string $valor_conversion_informacion_pago_no_internet
 * @property string $valor_conversionarticulos_wishlist_no_internet
 * @property string $valor_conversion_registros_no_internet
 * @property string $valor_conversion_poagos_iniciados_no_internet
 * @property string $valor_conversion_clientes_potenciales_no_internet
 * @property string $valor_conversion_otro_tipo_no_internet
 * @property string $valor_conversion_compras_no_internet
 * @property string $valor_conversion_busquedas_no_internet
 * @property string $valor_conversion_visualizacion_contenido_no_internet
 * @property string $valor_conversion_sitio_web
 * @property string $valor_conversion_informacion_pago_sitio_web
 * @property string $valor_conversion_productos_carrito_sitio_web
 * @property string $valor_conversion_articulos_wishlist_sitio_web
 * @property string $valor_conversion_registros_completados_sitio_web
 * @property string $valor_conversion_pagos_iniciados_sitio_web
 * @property string $valor_conversion_clientes_potenciales_sitio_web
 * @property string $valor_conversion_compras_sitio_web
 * @property string $valor_conversion_busquedas_sitio_web
 * @property string $valor_conversion_visualizacion_contenido_sitio_web
 * @property string $valor_comversion_finalizacion_flujo_trabajo_facebook
 * @property string $valor_conversion_compra_facxebook
 * @property string $acciones_aplicacion
 * @property string $logros_desbloqueados_aplicacion
 * @property string $sessiones_aplicaciones
 * @property string $informacion_pago_agregada_aplicacion
 * @property string $articulos_agregados_carrito_aplicacion
 * @property string $articulos_agregados_wishlist_aplicacion
 * @property string $registros_completados_aplicacion
 * @property string $visualizacion_contenidos_aplicacion
 * @property string $pagos_iniciados_aplicacion
 * @property string $niveles_completados_aplicacion
 * @property string $compras_aplicacion
 * @property string $calificaciones_aplicacion
 * @property string $busquedas_aplicacion
 * @property string $gastos_creditos_aplicacion
 * @property string $tutoriales_completados_aplicacion
 * @property string $acciones_otro_tipo_aplicacion
 * @property string $interaccion_aplicacion_computadora
 * @property string $instalaciones_aplicacion_computadoras
 * @property string $interaccion_historia_aplicacion_computadoras
 * @property string $usos_aplicacion_computadoras
 * @property string $visitas
 * @property string $solicitudes_ofertas
 * @property string $gastos_creditos
 * @property string $partidas_juegos
 * @property string $clientes_potenciales_formulario
 * @property string $clics_enlace
 * @property string $menciones_pagina
 * @property string $instalaciones_aplicacion_celulares
 * @property string $informacion_pago_agregada_no_internet
 * @property string $articulos_agregados_carrito_no_internet
 * @property string $articulos_agregados_wishlist_no_internet
 * @property string $registros_completados_no_internet
 * @property string $pagos_iniciados_no_internet
 * @property string $clientes_potenciales_no_internet
 * @property string $conversiones_otro_tipo_no_internet
 * @property string $compras_no_internet
 * @property string $busquedas_no_internet
 * @property string $visualizaciones_contenido_no_internet
 * @property string $conversiones_sitio_web
 * @property string $informacion_pago_agregada_sitio_web
 * @property string $articulos_agregados_carrito_sitio_web
 * @property string $articulos_agregados_wishlist_sitio_web
 * @property string $registros_completados_sitio_web
 * @property string $pagos_iniciados_sitio_web
 * @property string $clientes_potenciales_sitio_web
 * @property string $compras_sitio_web
 * @property string $busquedas_sitio_web
 * @property string $visualizaciones_contenido_sitio_web
 * @property string $conversaciones_mensajes_bloqueadas
 * @property string $respuesta_mensajes
 * @property string $nuevas_conversiones_mensajes
 * @property string $finalizacion_flujo_trabajo_facebook
 * @property string $compras_facebook
 * @property string $participacion_pagina
 * @property string $visualizacion_fotos
 * @property string $veces_compartida_publicacion
 * @property string $comentarios_publicacion
 * @property string $interaccion_publicacion
 * @property string $reacciones_publicacion
 * @property string $respuestas_eventos
 * @property string $visitas_pestanas_pagina
 * @property string $reproduciones_video_3_segundos
 * @property string $logros_desbloqueados_unicos_aplicacion
 * @property string $sesiones_unicas_aplicacion
 * @property string $informacion_pago_unica_agregada_aplicacion
 * @property string $articulos_agregados_carrito_unicos_aplicacion
 * @property string $articulos_agregados_wishlist_unicos_aplicacion
 * @property string $registros_unicos_completados_aplicacion
 * @property string $visualizaciones_contenido_unicas_aplicacion
 * @property string $pagos_iniciados_unicos_aplicacion
 * @property string $niveles_unicos_completados_aplicacion
 * @property string $compras_unicas_aplicacion
 * @property string $calificaciones_unicas_aplicacion_enviadas
 * @property string $busquedas_unicas_aplicacion
 * @property string $gastos_creditos_unicos_aplicacion
 * @property string $tutoriales_unicos_completados_aplicacion
 * @property string $clics_unicos_enlaces
 * @property string $porcentaje_tiempocomponentes_canvas
 * @property string $costo_accion_aplicacion_mxn
 * @property string $costo_logro_desbloqueado_aplicacion_mxn
 * @property string $costo_sesion_aplicacion_mxn
 * @property string $costo_informacion_pago_agregada_aplicacion_mxn
 * @property string $costo_articulo_agregado_carrito_aplicacion_mxn
 * @property string $costo_articulo_agregado_wishlist_aplicacion_mxn
 * @property string $costo_registro_completado_aplicacion_mxn
 * @property string $costo_visualizacion_contenido_aplicacion_mxn
 * @property string $costo_pago_iniciado_aplicacion_mxn
 * @property string $costo_nivel_completado_aplicacion_mxn
 * @property string $costo_compra_aplicacion_mxn
 * @property string $costo_calificacion_aplicacion_mxn
 * @property string $costo_busqueda_aplicacion_mxn
 * @property string $costo_gasto_credito_aplicacion_mxn
 * @property string $costo_tutorial_completado_aplicacion_mxn
 * @property string $costo_accion_otro_tipo_aplicacion_mxn
 * @property string $costo_interaccion_aplicacion_mxn
 * @property string $costo_instalacion_aplicacion_pc_mxn
 * @property string $costo_interaccion_historia_aplicacion_pc_mxn
 * @property string $costo_uso_aplicacion_pc_mxn
 * @property string $costo_visita_mxn
 * @property string $costo_solicitud_oferta_mxn
 * @property string $costo_accion_gasto_creditos_mxn
 * @property string $costo_partida_juego_mxn
 * @property string $costo_cliente_potencial_mxn
 * @property string $costo_me_gusta_pag_mxn
 * @property string $cpc_mxn
 * @property string $costo_mencion_pag_mxn
 * @property string $costo_instalacion_aplicacion_mxn
 * @property string $costo_informacion_pago_agregada_no_internet_mxn
 * @property string $costo_articulo_agregado_carrito_no_internet_mxn
 * @property string $costo_articulo_agregado_wishlist_no_internet_mxn
 * @property string $costo_registro_completado_no_internet_mxn
 * @property string $costo_pago_iniciado_no_internet_mxn
 * @property string $costo_cliente_potencial_no_internet
 * @property string $costo_conversion_otro_tipo_no_internet
 * @property string $costo_compra_no_internet_mxn
 * @property string $costo_busqueda_no_internet_mxn
 * @property string $costo_visualizacion_contenido_no_internet_mxn
 * @property string $costo_conversion_sitio_web_mxn
 * @property string $costo_informacion_pago_agregada_sitio_web_mxn
 * @property string $costo_articulo_agregado_carrito_sitio_web_mxn
 * @property string $costo_articulo_agregado_wishlist_sitio_web_mxn
 * @property string $costo_registro_completado_sitio_web_mxn
 * @property string $costo_pago_iniciado_sitio_web_mxn
 * @property string $costo_cliente_potencial_sitio_web_mxn
 * @property string $costo_compra_sitio_web_mxn
 * @property string $costo_busqueda_sitio_web_mxn
 * @property string $costo_visualizacion_contenido_sitio_web_mxn
 * @property string $costo_finalizacion_flujo_trabajo_facebook_mxn
 * @property string $costo_nueva_conversacion_mensajes_mxn
 * @property string $costo_respuesta_mensajes_mxn
 * @property string $costo_compra_facebook_mxn
 * @property string $costo_interaccion_pagina_mxn
 * @property string $costo_visualizacion_foto_mxn
 * @property string $costo_veces_compartida_publicacion_mxn
 * @property string $costo_comentario_publicacion_mxn
 * @property string $costo_interaccion_publicacion_mxn
 * @property string $costo_reaccion_publicacion_mxn
 * @property string $costo_respuesta_evento_mxn
 * @property string $costo_visita_pestana_pagina_mxn
 * @property string $costo_reproduccion_video_3_seg_mxn
 * @property string $costo_outbound_clic_mxn
 * @property string $costo_logro_desbloqueado_unico_aplicacion_mxn
 * @property string $costo_sesion_unica_aplicacion_mxn
 * @property string $costo_informacion_pago_agregada_unica_aplicacion_mxn
 * @property string $costo_articulo_agregado_carrito_unico_aplicacion_mxn
 * @property string $costo_articulo_agregado_wishlist_unico_aplicacion_mxn
 * @property string $costo_registro_unico_completado_aplicacion_mxn
 * @property string $costo_visualizacion_contenido_unico_aplicacion_mxn
 * @property string $costo_pago_iniciado_unico_aplicacion_mxn
 * @property string $costo_nivel_completado_unico_aplicacion_mxn
 * @property string $costo_compra_unica_aplicacion_mxn
 * @property string $costo_calificacion_unica_aplicacion_mxn
 * @property string $costo_busqueda_unica_aplicacion_mxn
 * @property string $costo_gasto_credito_unico_aplicacion_mxn
 * @property string $costo_tutorial_unico_completado_aplicacion_mxn
 * @property string $costo_clic_unico_enlace_mxn
 * @property string $costo_clic_saliente_unico_mxn
 * @property string $costo_reproduccion_video_10_seg_mxn
 * @property string $clics_salientes
 * @property string $ctr_saliente
 * @property string $clic_saliente_unico
 * @property string $str_saliente_unico
 * @property string $porcentaje_video_reproducido
 * @property string $tiempo_promedio_reproduccion_video
 * @property string $reproducciones_video_100
 * @property string $reproducciones_video_25
 * @property string $reproducciones_video_50
 * @property string $reproducciones_video_75
 * @property string $reproducciones_video_95
 * @property string $reproducciones_video_10_seg
 * @property string $reproducciones_video_30_seg
 * @property string $ctr
 * @property string $roas_compras_sitio_web
 * @property string $roas_compras_aplicacion
 * @property string $puja
 * @property string $tipo_puja
 * @property string $visualizaciones_de_fotos
 */
class FacebookData extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'facebook_data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idfacebook_data', 'required'),
			array('idfacebook_data', 'length', 'max'=>50),
			array('nombre_anuncio, indicador_resultados, nombre_campana, nombre_conjunto_anuncios', 'length', 'max'=>255),
			array('entrega, resultados, alcance, costo_resultados, id_cuenta, nombre_cuenta, id_anuncio, finalizacion, tiempo_visualizacion_canvas, id_campana, id_conjunto_anuncios, inicio_informe, fin_informe, mejora_estimada_recuerdo, frecuencia, comentarios_positivos, comentarios_negativos, proporcion_resultados, impresiones_en_bruto, visualizaciones_de_fotos', 'length', 'max'=>45),
			array('importe_gastado, personas_acciones, clicks_boton, porcentaje_visualizacion_canvas, click_todos, costo_mejora_estimada, costo_cualquier_accion, costo_click_unico, cpc_todos, cpm_impresiones, costo_mil_personas, ctr_todos, indice_mejora_estimada, impreciones, clics_sociales, impresiones_sociales, alcance_social, importe_gastado_hoy, valor_conversion_total, acciones, clics_unicos_todos, ctr_unicos_todos, ctr_unico_porcentaje, clics_socilaes_unicos_todos, valor_conversiones_accion_aplicacion, valor_conversion_articulos_carrito_aplicacion, valor_conversion_artuculos_wishlist_aplicacion, valor_conversion_visualizacion_aplicacion, valor_conversion_pagos_iniciados_aplicacion, valor_conversion_compras_aplicacion, valor_conversion_calificaciones_unicas_aplicacion, valor_conversion_gastos_creditos_aplicacion, valor_conversion_gastos_creditos, valor_conversion_informacion_pago_no_internet, valor_conversionarticulos_wishlist_no_internet, valor_conversion_registros_no_internet, valor_conversion_poagos_iniciados_no_internet, valor_conversion_clientes_potenciales_no_internet, valor_conversion_otro_tipo_no_internet, valor_conversion_compras_no_internet, valor_conversion_busquedas_no_internet, valor_conversion_visualizacion_contenido_no_internet, valor_conversion_sitio_web, valor_conversion_informacion_pago_sitio_web, valor_conversion_productos_carrito_sitio_web, valor_conversion_articulos_wishlist_sitio_web, valor_conversion_registros_completados_sitio_web, valor_conversion_pagos_iniciados_sitio_web, valor_conversion_clientes_potenciales_sitio_web, valor_conversion_compras_sitio_web, valor_conversion_busquedas_sitio_web, valor_conversion_visualizacion_contenido_sitio_web, valor_comversion_finalizacion_flujo_trabajo_facebook, valor_conversion_compra_facxebook, acciones_aplicacion, logros_desbloqueados_aplicacion, sessiones_aplicaciones, informacion_pago_agregada_aplicacion, articulos_agregados_carrito_aplicacion, articulos_agregados_wishlist_aplicacion, registros_completados_aplicacion, visualizacion_contenidos_aplicacion, pagos_iniciados_aplicacion, niveles_completados_aplicacion, compras_aplicacion, calificaciones_aplicacion, busquedas_aplicacion, gastos_creditos_aplicacion, tutoriales_completados_aplicacion, acciones_otro_tipo_aplicacion, interaccion_aplicacion_computadora, instalaciones_aplicacion_computadoras, interaccion_historia_aplicacion_computadoras, usos_aplicacion_computadoras, solicitudes_ofertas, gastos_creditos, partidas_juegos, clientes_potenciales_formulario, clics_enlace, instalaciones_aplicacion_celulares, informacion_pago_agregada_no_internet, articulos_agregados_carrito_no_internet, articulos_agregados_wishlist_no_internet, registros_completados_no_internet, pagos_iniciados_no_internet, clientes_potenciales_no_internet, conversiones_otro_tipo_no_internet, compras_no_internet, busquedas_no_internet, visualizaciones_contenido_no_internet, conversiones_sitio_web, informacion_pago_agregada_sitio_web, articulos_agregados_carrito_sitio_web, articulos_agregados_wishlist_sitio_web, registros_completados_sitio_web, pagos_iniciados_sitio_web, clientes_potenciales_sitio_web, compras_sitio_web, busquedas_sitio_web, visualizaciones_contenido_sitio_web, conversaciones_mensajes_bloqueadas, respuesta_mensajes, nuevas_conversiones_mensajes, finalizacion_flujo_trabajo_facebook, compras_facebook, visualizacion_fotos, respuestas_eventos, reproduciones_video_3_segundos, logros_desbloqueados_unicos_aplicacion, sesiones_unicas_aplicacion, informacion_pago_unica_agregada_aplicacion, articulos_agregados_carrito_unicos_aplicacion, articulos_agregados_wishlist_unicos_aplicacion, registros_unicos_completados_aplicacion, visualizaciones_contenido_unicas_aplicacion, pagos_iniciados_unicos_aplicacion, niveles_unicos_completados_aplicacion, compras_unicas_aplicacion, calificaciones_unicas_aplicacion_enviadas, busquedas_unicas_aplicacion, gastos_creditos_unicos_aplicacion, tutoriales_unicos_completados_aplicacion, clics_unicos_enlaces, porcentaje_tiempocomponentes_canvas, costo_accion_aplicacion_mxn, costo_logro_desbloqueado_aplicacion_mxn, costo_sesion_aplicacion_mxn, costo_informacion_pago_agregada_aplicacion_mxn, costo_articulo_agregado_carrito_aplicacion_mxn, costo_articulo_agregado_wishlist_aplicacion_mxn, costo_registro_completado_aplicacion_mxn, costo_visualizacion_contenido_aplicacion_mxn, costo_pago_iniciado_aplicacion_mxn, costo_nivel_completado_aplicacion_mxn, costo_compra_aplicacion_mxn, costo_calificacion_aplicacion_mxn, costo_busqueda_aplicacion_mxn, costo_gasto_credito_aplicacion_mxn, costo_tutorial_completado_aplicacion_mxn, costo_accion_otro_tipo_aplicacion_mxn, costo_interaccion_aplicacion_mxn, costo_instalacion_aplicacion_pc_mxn, costo_interaccion_historia_aplicacion_pc_mxn, costo_uso_aplicacion_pc_mxn, costo_visita_mxn, costo_solicitud_oferta_mxn, costo_accion_gasto_creditos_mxn, costo_partida_juego_mxn, costo_cliente_potencial_mxn, costo_me_gusta_pag_mxn, cpc_mxn, costo_mencion_pag_mxn, costo_instalacion_aplicacion_mxn, costo_informacion_pago_agregada_no_internet_mxn, costo_articulo_agregado_carrito_no_internet_mxn, costo_articulo_agregado_wishlist_no_internet_mxn, costo_registro_completado_no_internet_mxn, costo_pago_iniciado_no_internet_mxn, costo_cliente_potencial_no_internet, costo_conversion_otro_tipo_no_internet, costo_compra_no_internet_mxn, costo_busqueda_no_internet_mxn, costo_visualizacion_contenido_no_internet_mxn, costo_conversion_sitio_web_mxn, costo_informacion_pago_agregada_sitio_web_mxn, costo_articulo_agregado_carrito_sitio_web_mxn, costo_articulo_agregado_wishlist_sitio_web_mxn, costo_registro_completado_sitio_web_mxn, costo_pago_iniciado_sitio_web_mxn, costo_cliente_potencial_sitio_web_mxn, costo_compra_sitio_web_mxn, costo_busqueda_sitio_web_mxn, costo_visualizacion_contenido_sitio_web_mxn, costo_finalizacion_flujo_trabajo_facebook_mxn, costo_nueva_conversacion_mensajes_mxn, costo_respuesta_mensajes_mxn, costo_compra_facebook_mxn, costo_interaccion_pagina_mxn, costo_visualizacion_foto_mxn, costo_veces_compartida_publicacion_mxn, costo_comentario_publicacion_mxn, costo_interaccion_publicacion_mxn, costo_reaccion_publicacion_mxn, costo_respuesta_evento_mxn, costo_visita_pestana_pagina_mxn, costo_reproduccion_video_3_seg_mxn, costo_outbound_clic_mxn, costo_logro_desbloqueado_unico_aplicacion_mxn, costo_sesion_unica_aplicacion_mxn, costo_informacion_pago_agregada_unica_aplicacion_mxn, costo_articulo_agregado_carrito_unico_aplicacion_mxn, costo_articulo_agregado_wishlist_unico_aplicacion_mxn, costo_registro_unico_completado_aplicacion_mxn, costo_visualizacion_contenido_unico_aplicacion_mxn, costo_pago_iniciado_unico_aplicacion_mxn, costo_nivel_completado_unico_aplicacion_mxn, costo_compra_unica_aplicacion_mxn, costo_calificacion_unica_aplicacion_mxn, costo_busqueda_unica_aplicacion_mxn, costo_gasto_credito_unico_aplicacion_mxn, costo_tutorial_unico_completado_aplicacion_mxn, costo_clic_unico_enlace_mxn, costo_clic_saliente_unico_mxn, costo_reproduccion_video_10_seg_mxn, clics_salientes, ctr_saliente, clic_saliente_unico, str_saliente_unico, porcentaje_video_reproducido, reproducciones_video_100, reproducciones_video_25, reproducciones_video_50, reproducciones_video_75, reproducciones_video_95, reproducciones_video_10_seg, reproducciones_video_30_seg, ctr, roas_compras_sitio_web, roas_compras_aplicacion, puja', 'length', 'max'=>14),
			array('puntuacion_relevancia, me_gusta_pagina, visitas, menciones_pagina, participacion_pagina, veces_compartida_publicacion, comentarios_publicacion, interaccion_publicacion, reacciones_publicacion, visitas_pestanas_pagina', 'length', 'max'=>10),
			array('tipo_puja', 'length', 'max'=>25),
			array('tiempo_promedio_reproduccion_video', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idfacebook_data, nombre_anuncio, entrega, resultados, indicador_resultados, alcance, costo_resultados, importe_gastado, puntuacion_relevancia, personas_acciones, me_gusta_pagina, id_cuenta, nombre_cuenta, id_anuncio, finalizacion, clicks_boton, porcentaje_visualizacion_canvas, tiempo_visualizacion_canvas, id_campana, nombre_campana, id_conjunto_anuncios, nombre_conjunto_anuncios, click_todos, costo_mejora_estimada, costo_cualquier_accion, costo_click_unico, cpc_todos, cpm_impresiones, costo_mil_personas, ctr_todos, inicio_informe, fin_informe, mejora_estimada_recuerdo, indice_mejora_estimada, frecuencia, impreciones, comentarios_positivos, comentarios_negativos, proporcion_resultados, clics_sociales, impresiones_sociales, alcance_social, importe_gastado_hoy, impresiones_en_bruto, valor_conversion_total, acciones, clics_unicos_todos, ctr_unicos_todos, ctr_unico_porcentaje, clics_socilaes_unicos_todos, valor_conversiones_accion_aplicacion, valor_conversion_articulos_carrito_aplicacion, valor_conversion_artuculos_wishlist_aplicacion, valor_conversion_visualizacion_aplicacion, valor_conversion_pagos_iniciados_aplicacion, valor_conversion_compras_aplicacion, valor_conversion_calificaciones_unicas_aplicacion, valor_conversion_gastos_creditos_aplicacion, valor_conversion_gastos_creditos, valor_conversion_informacion_pago_no_internet, valor_conversionarticulos_wishlist_no_internet, valor_conversion_registros_no_internet, valor_conversion_poagos_iniciados_no_internet, valor_conversion_clientes_potenciales_no_internet, valor_conversion_otro_tipo_no_internet, valor_conversion_compras_no_internet, valor_conversion_busquedas_no_internet, valor_conversion_visualizacion_contenido_no_internet, valor_conversion_sitio_web, valor_conversion_informacion_pago_sitio_web, valor_conversion_productos_carrito_sitio_web, valor_conversion_articulos_wishlist_sitio_web, valor_conversion_registros_completados_sitio_web, valor_conversion_pagos_iniciados_sitio_web, valor_conversion_clientes_potenciales_sitio_web, valor_conversion_compras_sitio_web, valor_conversion_busquedas_sitio_web, valor_conversion_visualizacion_contenido_sitio_web, valor_comversion_finalizacion_flujo_trabajo_facebook, valor_conversion_compra_facxebook, acciones_aplicacion, logros_desbloqueados_aplicacion, sessiones_aplicaciones, informacion_pago_agregada_aplicacion, articulos_agregados_carrito_aplicacion, articulos_agregados_wishlist_aplicacion, registros_completados_aplicacion, visualizacion_contenidos_aplicacion, pagos_iniciados_aplicacion, niveles_completados_aplicacion, compras_aplicacion, calificaciones_aplicacion, busquedas_aplicacion, gastos_creditos_aplicacion, tutoriales_completados_aplicacion, acciones_otro_tipo_aplicacion, interaccion_aplicacion_computadora, instalaciones_aplicacion_computadoras, interaccion_historia_aplicacion_computadoras, usos_aplicacion_computadoras, visitas, solicitudes_ofertas, gastos_creditos, partidas_juegos, clientes_potenciales_formulario, clics_enlace, menciones_pagina, instalaciones_aplicacion_celulares, informacion_pago_agregada_no_internet, articulos_agregados_carrito_no_internet, articulos_agregados_wishlist_no_internet, registros_completados_no_internet, pagos_iniciados_no_internet, clientes_potenciales_no_internet, conversiones_otro_tipo_no_internet, compras_no_internet, busquedas_no_internet, visualizaciones_contenido_no_internet, conversiones_sitio_web, informacion_pago_agregada_sitio_web, articulos_agregados_carrito_sitio_web, articulos_agregados_wishlist_sitio_web, registros_completados_sitio_web, pagos_iniciados_sitio_web, clientes_potenciales_sitio_web, compras_sitio_web, busquedas_sitio_web, visualizaciones_contenido_sitio_web, conversaciones_mensajes_bloqueadas, respuesta_mensajes, nuevas_conversiones_mensajes, finalizacion_flujo_trabajo_facebook, compras_facebook, participacion_pagina, visualizacion_fotos, veces_compartida_publicacion, comentarios_publicacion, interaccion_publicacion, reacciones_publicacion, respuestas_eventos, visitas_pestanas_pagina, reproduciones_video_3_segundos, logros_desbloqueados_unicos_aplicacion, sesiones_unicas_aplicacion, informacion_pago_unica_agregada_aplicacion, articulos_agregados_carrito_unicos_aplicacion, articulos_agregados_wishlist_unicos_aplicacion, registros_unicos_completados_aplicacion, visualizaciones_contenido_unicas_aplicacion, pagos_iniciados_unicos_aplicacion, niveles_unicos_completados_aplicacion, compras_unicas_aplicacion, calificaciones_unicas_aplicacion_enviadas, busquedas_unicas_aplicacion, gastos_creditos_unicos_aplicacion, tutoriales_unicos_completados_aplicacion, clics_unicos_enlaces, porcentaje_tiempocomponentes_canvas, costo_accion_aplicacion_mxn, costo_logro_desbloqueado_aplicacion_mxn, costo_sesion_aplicacion_mxn, costo_informacion_pago_agregada_aplicacion_mxn, costo_articulo_agregado_carrito_aplicacion_mxn, costo_articulo_agregado_wishlist_aplicacion_mxn, costo_registro_completado_aplicacion_mxn, costo_visualizacion_contenido_aplicacion_mxn, costo_pago_iniciado_aplicacion_mxn, costo_nivel_completado_aplicacion_mxn, costo_compra_aplicacion_mxn, costo_calificacion_aplicacion_mxn, costo_busqueda_aplicacion_mxn, costo_gasto_credito_aplicacion_mxn, costo_tutorial_completado_aplicacion_mxn, costo_accion_otro_tipo_aplicacion_mxn, costo_interaccion_aplicacion_mxn, costo_instalacion_aplicacion_pc_mxn, costo_interaccion_historia_aplicacion_pc_mxn, costo_uso_aplicacion_pc_mxn, costo_visita_mxn, costo_solicitud_oferta_mxn, costo_accion_gasto_creditos_mxn, costo_partida_juego_mxn, costo_cliente_potencial_mxn, costo_me_gusta_pag_mxn, cpc_mxn, costo_mencion_pag_mxn, costo_instalacion_aplicacion_mxn, costo_informacion_pago_agregada_no_internet_mxn, costo_articulo_agregado_carrito_no_internet_mxn, costo_articulo_agregado_wishlist_no_internet_mxn, costo_registro_completado_no_internet_mxn, costo_pago_iniciado_no_internet_mxn, costo_cliente_potencial_no_internet, costo_conversion_otro_tipo_no_internet, costo_compra_no_internet_mxn, costo_busqueda_no_internet_mxn, costo_visualizacion_contenido_no_internet_mxn, costo_conversion_sitio_web_mxn, costo_informacion_pago_agregada_sitio_web_mxn, costo_articulo_agregado_carrito_sitio_web_mxn, costo_articulo_agregado_wishlist_sitio_web_mxn, costo_registro_completado_sitio_web_mxn, costo_pago_iniciado_sitio_web_mxn, costo_cliente_potencial_sitio_web_mxn, costo_compra_sitio_web_mxn, costo_busqueda_sitio_web_mxn, costo_visualizacion_contenido_sitio_web_mxn, costo_finalizacion_flujo_trabajo_facebook_mxn, costo_nueva_conversacion_mensajes_mxn, costo_respuesta_mensajes_mxn, costo_compra_facebook_mxn, costo_interaccion_pagina_mxn, costo_visualizacion_foto_mxn, costo_veces_compartida_publicacion_mxn, costo_comentario_publicacion_mxn, costo_interaccion_publicacion_mxn, costo_reaccion_publicacion_mxn, costo_respuesta_evento_mxn, costo_visita_pestana_pagina_mxn, costo_reproduccion_video_3_seg_mxn, costo_outbound_clic_mxn, costo_logro_desbloqueado_unico_aplicacion_mxn, costo_sesion_unica_aplicacion_mxn, costo_informacion_pago_agregada_unica_aplicacion_mxn, costo_articulo_agregado_carrito_unico_aplicacion_mxn, costo_articulo_agregado_wishlist_unico_aplicacion_mxn, costo_registro_unico_completado_aplicacion_mxn, costo_visualizacion_contenido_unico_aplicacion_mxn, costo_pago_iniciado_unico_aplicacion_mxn, costo_nivel_completado_unico_aplicacion_mxn, costo_compra_unica_aplicacion_mxn, costo_calificacion_unica_aplicacion_mxn, costo_busqueda_unica_aplicacion_mxn, costo_gasto_credito_unico_aplicacion_mxn, costo_tutorial_unico_completado_aplicacion_mxn, costo_clic_unico_enlace_mxn, costo_clic_saliente_unico_mxn, costo_reproduccion_video_10_seg_mxn, clics_salientes, ctr_saliente, clic_saliente_unico, str_saliente_unico, porcentaje_video_reproducido, tiempo_promedio_reproduccion_video, reproducciones_video_100, reproducciones_video_25, reproducciones_video_50, reproducciones_video_75, reproducciones_video_95, reproducciones_video_10_seg, reproducciones_video_30_seg, ctr, roas_compras_sitio_web, roas_compras_aplicacion, puja, tipo_puja, visualizaciones_de_fotos', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idfacebook_data' => 'Idfacebook Data',
			'nombre_anuncio' => 'Nombre Anuncio',
			'entrega' => 'Entrega',
			'resultados' => 'Resultados',
			'indicador_resultados' => 'Indicador Resultados',
			'alcance' => 'Alcance',
			'costo_resultados' => 'Costo Resultados',
			'importe_gastado' => 'Importe Gastado',
			'puntuacion_relevancia' => 'Puntuacion Relevancia',
			'personas_acciones' => 'Personas Acciones',
			'me_gusta_pagina' => 'Me Gusta Pagina',
			'id_cuenta' => 'Id Cuenta',
			'nombre_cuenta' => 'Nombre Cuenta',
			'id_anuncio' => 'Id Anuncio',
			'finalizacion' => 'Finalizacion',
			'clicks_boton' => 'Clicks Boton',
			'porcentaje_visualizacion_canvas' => 'Porcentaje Visualizacion Canvas',
			'tiempo_visualizacion_canvas' => 'Tiempo Visualizacion Canvas',
			'id_campana' => 'Id Campana',
			'nombre_campana' => 'Nombre Campana',
			'id_conjunto_anuncios' => 'Id Conjunto Anuncios',
			'nombre_conjunto_anuncios' => 'Nombre Conjunto Anuncios',
			'click_todos' => 'Click Todos',
			'costo_mejora_estimada' => 'Costo Mejora Estimada',
			'costo_cualquier_accion' => 'Costo Cualquier Accion',
			'costo_click_unico' => 'Costo Click Unico',
			'cpc_todos' => 'Cpc Todos',
			'cpm_impresiones' => 'Cpm Impresiones',
			'costo_mil_personas' => 'Costo Mil Personas',
			'ctr_todos' => 'Ctr Todos',
			'inicio_informe' => 'Inicio Informe',
			'fin_informe' => 'Fin Informe',
			'mejora_estimada_recuerdo' => 'Mejora Estimada Recuerdo',
			'indice_mejora_estimada' => 'Indice Mejora Estimada',
			'frecuencia' => 'Frecuencia',
			'impreciones' => 'Impreciones',
			'comentarios_positivos' => 'Comentarios Positivos',
			'comentarios_negativos' => 'Comentarios Negativos',
			'proporcion_resultados' => 'Proporcion Resultados',
			'clics_sociales' => 'Clics Sociales',
			'impresiones_sociales' => 'Impresiones Sociales',
			'alcance_social' => 'Alcance Social',
			'importe_gastado_hoy' => 'Importe Gastado Hoy',
			'impresiones_en_bruto' => 'Impresiones En Bruto',
			'valor_conversion_total' => 'Valor Conversion Total',
			'acciones' => 'Acciones',
			'clics_unicos_todos' => 'Clics Unicos Todos',
			'ctr_unicos_todos' => 'Ctr Unicos Todos',
			'ctr_unico_porcentaje' => 'Ctr Unico Porcentaje',
			'clics_socilaes_unicos_todos' => 'Clics Socilaes Unicos Todos',
			'valor_conversiones_accion_aplicacion' => 'Valor Conversiones Accion Aplicacion',
			'valor_conversion_articulos_carrito_aplicacion' => 'Valor Conversion Articulos Carrito Aplicacion',
			'valor_conversion_artuculos_wishlist_aplicacion' => 'Valor Conversion Artuculos Wishlist Aplicacion',
			'valor_conversion_visualizacion_aplicacion' => 'Valor Conversion Visualizacion Aplicacion',
			'valor_conversion_pagos_iniciados_aplicacion' => 'Valor Conversion Pagos Iniciados Aplicacion',
			'valor_conversion_compras_aplicacion' => 'Valor Conversion Compras Aplicacion',
			'valor_conversion_calificaciones_unicas_aplicacion' => 'Valor Conversion Calificaciones Unicas Aplicacion',
			'valor_conversion_gastos_creditos_aplicacion' => 'Valor Conversion Gastos Creditos Aplicacion',
			'valor_conversion_gastos_creditos' => 'Valor Conversion Gastos Creditos',
			'valor_conversion_informacion_pago_no_internet' => 'Valor Conversion Informacion Pago No Internet',
			'valor_conversionarticulos_wishlist_no_internet' => 'Valor Conversionarticulos Wishlist No Internet',
			'valor_conversion_registros_no_internet' => 'Valor Conversion Registros No Internet',
			'valor_conversion_poagos_iniciados_no_internet' => 'Valor Conversion Poagos Iniciados No Internet',
			'valor_conversion_clientes_potenciales_no_internet' => 'Valor Conversion Clientes Potenciales No Internet',
			'valor_conversion_otro_tipo_no_internet' => 'Valor Conversion Otro Tipo No Internet',
			'valor_conversion_compras_no_internet' => 'Valor Conversion Compras No Internet',
			'valor_conversion_busquedas_no_internet' => 'Valor Conversion Busquedas No Internet',
			'valor_conversion_visualizacion_contenido_no_internet' => 'Valor Conversion Visualizacion Contenido No Internet',
			'valor_conversion_sitio_web' => 'Valor Conversion Sitio Web',
			'valor_conversion_informacion_pago_sitio_web' => 'Valor Conversion Informacion Pago Sitio Web',
			'valor_conversion_productos_carrito_sitio_web' => 'Valor Conversion Productos Carrito Sitio Web',
			'valor_conversion_articulos_wishlist_sitio_web' => 'Valor Conversion Articulos Wishlist Sitio Web',
			'valor_conversion_registros_completados_sitio_web' => 'Valor Conversion Registros Completados Sitio Web',
			'valor_conversion_pagos_iniciados_sitio_web' => 'Valor Conversion Pagos Iniciados Sitio Web',
			'valor_conversion_clientes_potenciales_sitio_web' => 'Valor Conversion Clientes Potenciales Sitio Web',
			'valor_conversion_compras_sitio_web' => 'Valor Conversion Compras Sitio Web',
			'valor_conversion_busquedas_sitio_web' => 'Valor Conversion Busquedas Sitio Web',
			'valor_conversion_visualizacion_contenido_sitio_web' => 'Valor Conversion Visualizacion Contenido Sitio Web',
			'valor_comversion_finalizacion_flujo_trabajo_facebook' => 'Valor Comversion Finalizacion Flujo Trabajo Facebook',
			'valor_conversion_compra_facxebook' => 'Valor Conversion Compra Facxebook',
			'acciones_aplicacion' => 'Acciones Aplicacion',
			'logros_desbloqueados_aplicacion' => 'Logros Desbloqueados Aplicacion',
			'sessiones_aplicaciones' => 'Sessiones Aplicaciones',
			'informacion_pago_agregada_aplicacion' => 'Informacion Pago Agregada Aplicacion',
			'articulos_agregados_carrito_aplicacion' => 'Articulos Agregados Carrito Aplicacion',
			'articulos_agregados_wishlist_aplicacion' => 'Articulos Agregados Wishlist Aplicacion',
			'registros_completados_aplicacion' => 'Registros Completados Aplicacion',
			'visualizacion_contenidos_aplicacion' => 'Visualizacion Contenidos Aplicacion',
			'pagos_iniciados_aplicacion' => 'Pagos Iniciados Aplicacion',
			'niveles_completados_aplicacion' => 'Niveles Completados Aplicacion',
			'compras_aplicacion' => 'Compras Aplicacion',
			'calificaciones_aplicacion' => 'Calificaciones Aplicacion',
			'busquedas_aplicacion' => 'Busquedas Aplicacion',
			'gastos_creditos_aplicacion' => 'Gastos Creditos Aplicacion',
			'tutoriales_completados_aplicacion' => 'Tutoriales Completados Aplicacion',
			'acciones_otro_tipo_aplicacion' => 'Acciones Otro Tipo Aplicacion',
			'interaccion_aplicacion_computadora' => 'Interaccion Aplicacion Computadora',
			'instalaciones_aplicacion_computadoras' => 'Instalaciones Aplicacion Computadoras',
			'interaccion_historia_aplicacion_computadoras' => 'Interaccion Historia Aplicacion Computadoras',
			'usos_aplicacion_computadoras' => 'Usos Aplicacion Computadoras',
			'visitas' => 'Visitas',
			'solicitudes_ofertas' => 'Solicitudes Ofertas',
			'gastos_creditos' => 'Gastos Creditos',
			'partidas_juegos' => 'Partidas Juegos',
			'clientes_potenciales_formulario' => 'Clientes Potenciales Formulario',
			'clics_enlace' => 'Clics Enlace',
			'menciones_pagina' => 'Menciones Pagina',
			'instalaciones_aplicacion_celulares' => 'Instalaciones Aplicacion Celulares',
			'informacion_pago_agregada_no_internet' => 'Informacion Pago Agregada No Internet',
			'articulos_agregados_carrito_no_internet' => 'Articulos Agregados Carrito No Internet',
			'articulos_agregados_wishlist_no_internet' => 'Articulos Agregados Wishlist No Internet',
			'registros_completados_no_internet' => 'Registros Completados No Internet',
			'pagos_iniciados_no_internet' => 'Pagos Iniciados No Internet',
			'clientes_potenciales_no_internet' => 'Clientes Potenciales No Internet',
			'conversiones_otro_tipo_no_internet' => 'Conversiones Otro Tipo No Internet',
			'compras_no_internet' => 'Compras No Internet',
			'busquedas_no_internet' => 'Busquedas No Internet',
			'visualizaciones_contenido_no_internet' => 'Visualizaciones Contenido No Internet',
			'conversiones_sitio_web' => 'Conversiones Sitio Web',
			'informacion_pago_agregada_sitio_web' => 'Informacion Pago Agregada Sitio Web',
			'articulos_agregados_carrito_sitio_web' => 'Articulos Agregados Carrito Sitio Web',
			'articulos_agregados_wishlist_sitio_web' => 'Articulos Agregados Wishlist Sitio Web',
			'registros_completados_sitio_web' => 'Registros Completados Sitio Web',
			'pagos_iniciados_sitio_web' => 'Pagos Iniciados Sitio Web',
			'clientes_potenciales_sitio_web' => 'Clientes Potenciales Sitio Web',
			'compras_sitio_web' => 'Compras Sitio Web',
			'busquedas_sitio_web' => 'Busquedas Sitio Web',
			'visualizaciones_contenido_sitio_web' => 'Visualizaciones Contenido Sitio Web',
			'conversaciones_mensajes_bloqueadas' => 'Conversaciones Mensajes Bloqueadas',
			'respuesta_mensajes' => 'Respuesta Mensajes',
			'nuevas_conversiones_mensajes' => 'Nuevas Conversiones Mensajes',
			'finalizacion_flujo_trabajo_facebook' => 'Finalizacion Flujo Trabajo Facebook',
			'compras_facebook' => 'Compras Facebook',
			'participacion_pagina' => 'Participacion Pagina',
			'visualizacion_fotos' => 'Visualizacion Fotos',
			'veces_compartida_publicacion' => 'Veces Compartida Publicacion',
			'comentarios_publicacion' => 'Comentarios Publicacion',
			'interaccion_publicacion' => 'Interaccion Publicacion',
			'reacciones_publicacion' => 'Reacciones Publicacion',
			'respuestas_eventos' => 'Respuestas Eventos',
			'visitas_pestanas_pagina' => 'Visitas Pestanas Pagina',
			'reproduciones_video_3_segundos' => 'Reproduciones Video 3 Segundos',
			'logros_desbloqueados_unicos_aplicacion' => 'Logros Desbloqueados Unicos Aplicacion',
			'sesiones_unicas_aplicacion' => 'Sesiones Unicas Aplicacion',
			'informacion_pago_unica_agregada_aplicacion' => 'Informacion Pago Unica Agregada Aplicacion',
			'articulos_agregados_carrito_unicos_aplicacion' => 'Articulos Agregados Carrito Unicos Aplicacion',
			'articulos_agregados_wishlist_unicos_aplicacion' => 'Articulos Agregados Wishlist Unicos Aplicacion',
			'registros_unicos_completados_aplicacion' => 'Registros Unicos Completados Aplicacion',
			'visualizaciones_contenido_unicas_aplicacion' => 'Visualizaciones Contenido Unicas Aplicacion',
			'pagos_iniciados_unicos_aplicacion' => 'Pagos Iniciados Unicos Aplicacion',
			'niveles_unicos_completados_aplicacion' => 'Niveles Unicos Completados Aplicacion',
			'compras_unicas_aplicacion' => 'Compras Unicas Aplicacion',
			'calificaciones_unicas_aplicacion_enviadas' => 'Calificaciones Unicas Aplicacion Enviadas',
			'busquedas_unicas_aplicacion' => 'Busquedas Unicas Aplicacion',
			'gastos_creditos_unicos_aplicacion' => 'Gastos Creditos Unicos Aplicacion',
			'tutoriales_unicos_completados_aplicacion' => 'Tutoriales Unicos Completados Aplicacion',
			'clics_unicos_enlaces' => 'Clics Unicos Enlaces',
			'porcentaje_tiempocomponentes_canvas' => 'Porcentaje Tiempocomponentes Canvas',
			'costo_accion_aplicacion_mxn' => 'Costo Accion Aplicacion Mxn',
			'costo_logro_desbloqueado_aplicacion_mxn' => 'Costo Logro Desbloqueado Aplicacion Mxn',
			'costo_sesion_aplicacion_mxn' => 'Costo Sesion Aplicacion Mxn',
			'costo_informacion_pago_agregada_aplicacion_mxn' => 'Costo Informacion Pago Agregada Aplicacion Mxn',
			'costo_articulo_agregado_carrito_aplicacion_mxn' => 'Costo Articulo Agregado Carrito Aplicacion Mxn',
			'costo_articulo_agregado_wishlist_aplicacion_mxn' => 'Costo Articulo Agregado Wishlist Aplicacion Mxn',
			'costo_registro_completado_aplicacion_mxn' => 'Costo Registro Completado Aplicacion Mxn',
			'costo_visualizacion_contenido_aplicacion_mxn' => 'Costo Visualizacion Contenido Aplicacion Mxn',
			'costo_pago_iniciado_aplicacion_mxn' => 'Costo Pago Iniciado Aplicacion Mxn',
			'costo_nivel_completado_aplicacion_mxn' => 'Costo Nivel Completado Aplicacion Mxn',
			'costo_compra_aplicacion_mxn' => 'Costo Compra Aplicacion Mxn',
			'costo_calificacion_aplicacion_mxn' => 'Costo Calificacion Aplicacion Mxn',
			'costo_busqueda_aplicacion_mxn' => 'Costo Busqueda Aplicacion Mxn',
			'costo_gasto_credito_aplicacion_mxn' => 'Costo Gasto Credito Aplicacion Mxn',
			'costo_tutorial_completado_aplicacion_mxn' => 'Costo Tutorial Completado Aplicacion Mxn',
			'costo_accion_otro_tipo_aplicacion_mxn' => 'Costo Accion Otro Tipo Aplicacion Mxn',
			'costo_interaccion_aplicacion_mxn' => 'Costo Interaccion Aplicacion Mxn',
			'costo_instalacion_aplicacion_pc_mxn' => 'Costo Instalacion Aplicacion Pc Mxn',
			'costo_interaccion_historia_aplicacion_pc_mxn' => 'Costo Interaccion Historia Aplicacion Pc Mxn',
			'costo_uso_aplicacion_pc_mxn' => 'Costo Uso Aplicacion Pc Mxn',
			'costo_visita_mxn' => 'Costo Visita Mxn',
			'costo_solicitud_oferta_mxn' => 'Costo Solicitud Oferta Mxn',
			'costo_accion_gasto_creditos_mxn' => 'Costo Accion Gasto Creditos Mxn',
			'costo_partida_juego_mxn' => 'Costo Partida Juego Mxn',
			'costo_cliente_potencial_mxn' => 'Costo Cliente Potencial Mxn',
			'costo_me_gusta_pag_mxn' => 'Costo Me Gusta Pag Mxn',
			'cpc_mxn' => 'Cpc Mxn',
			'costo_mencion_pag_mxn' => 'Costo Mencion Pag Mxn',
			'costo_instalacion_aplicacion_mxn' => 'Costo Instalacion Aplicacion Mxn',
			'costo_informacion_pago_agregada_no_internet_mxn' => 'Costo Informacion Pago Agregada No Internet Mxn',
			'costo_articulo_agregado_carrito_no_internet_mxn' => 'Costo Articulo Agregado Carrito No Internet Mxn',
			'costo_articulo_agregado_wishlist_no_internet_mxn' => 'Costo Articulo Agregado Wishlist No Internet Mxn',
			'costo_registro_completado_no_internet_mxn' => 'Costo Registro Completado No Internet Mxn',
			'costo_pago_iniciado_no_internet_mxn' => 'Costo Pago Iniciado No Internet Mxn',
			'costo_cliente_potencial_no_internet' => 'Costo Cliente Potencial No Internet',
			'costo_conversion_otro_tipo_no_internet' => 'Costo Conversion Otro Tipo No Internet',
			'costo_compra_no_internet_mxn' => 'Costo Compra No Internet Mxn',
			'costo_busqueda_no_internet_mxn' => 'Costo Busqueda No Internet Mxn',
			'costo_visualizacion_contenido_no_internet_mxn' => 'Costo Visualizacion Contenido No Internet Mxn',
			'costo_conversion_sitio_web_mxn' => 'Costo Conversion Sitio Web Mxn',
			'costo_informacion_pago_agregada_sitio_web_mxn' => 'Costo Informacion Pago Agregada Sitio Web Mxn',
			'costo_articulo_agregado_carrito_sitio_web_mxn' => 'Costo Articulo Agregado Carrito Sitio Web Mxn',
			'costo_articulo_agregado_wishlist_sitio_web_mxn' => 'Costo Articulo Agregado Wishlist Sitio Web Mxn',
			'costo_registro_completado_sitio_web_mxn' => 'Costo Registro Completado Sitio Web Mxn',
			'costo_pago_iniciado_sitio_web_mxn' => 'Costo Pago Iniciado Sitio Web Mxn',
			'costo_cliente_potencial_sitio_web_mxn' => 'Costo Cliente Potencial Sitio Web Mxn',
			'costo_compra_sitio_web_mxn' => 'Costo Compra Sitio Web Mxn',
			'costo_busqueda_sitio_web_mxn' => 'Costo Busqueda Sitio Web Mxn',
			'costo_visualizacion_contenido_sitio_web_mxn' => 'Costo Visualizacion Contenido Sitio Web Mxn',
			'costo_finalizacion_flujo_trabajo_facebook_mxn' => 'Costo Finalizacion Flujo Trabajo Facebook Mxn',
			'costo_nueva_conversacion_mensajes_mxn' => 'Costo Nueva Conversacion Mensajes Mxn',
			'costo_respuesta_mensajes_mxn' => 'Costo Respuesta Mensajes Mxn',
			'costo_compra_facebook_mxn' => 'Costo Compra Facebook Mxn',
			'costo_interaccion_pagina_mxn' => 'Costo Interaccion Pagina Mxn',
			'costo_visualizacion_foto_mxn' => 'Costo Visualizacion Foto Mxn',
			'costo_veces_compartida_publicacion_mxn' => 'Costo Veces Compartida Publicacion Mxn',
			'costo_comentario_publicacion_mxn' => 'Costo Comentario Publicacion Mxn',
			'costo_interaccion_publicacion_mxn' => 'Costo Interaccion Publicacion Mxn',
			'costo_reaccion_publicacion_mxn' => 'Costo Reaccion Publicacion Mxn',
			'costo_respuesta_evento_mxn' => 'Costo Respuesta Evento Mxn',
			'costo_visita_pestana_pagina_mxn' => 'Costo Visita Pestana Pagina Mxn',
			'costo_reproduccion_video_3_seg_mxn' => 'Costo Reproduccion Video 3 Seg Mxn',
			'costo_outbound_clic_mxn' => 'Costo Outbound Clic Mxn',
			'costo_logro_desbloqueado_unico_aplicacion_mxn' => 'Costo Logro Desbloqueado Unico Aplicacion Mxn',
			'costo_sesion_unica_aplicacion_mxn' => 'Costo Sesion Unica Aplicacion Mxn',
			'costo_informacion_pago_agregada_unica_aplicacion_mxn' => 'Costo Informacion Pago Agregada Unica Aplicacion Mxn',
			'costo_articulo_agregado_carrito_unico_aplicacion_mxn' => 'Costo Articulo Agregado Carrito Unico Aplicacion Mxn',
			'costo_articulo_agregado_wishlist_unico_aplicacion_mxn' => 'Costo Articulo Agregado Wishlist Unico Aplicacion Mxn',
			'costo_registro_unico_completado_aplicacion_mxn' => 'Costo Registro Unico Completado Aplicacion Mxn',
			'costo_visualizacion_contenido_unico_aplicacion_mxn' => 'Costo Visualizacion Contenido Unico Aplicacion Mxn',
			'costo_pago_iniciado_unico_aplicacion_mxn' => 'Costo Pago Iniciado Unico Aplicacion Mxn',
			'costo_nivel_completado_unico_aplicacion_mxn' => 'Costo Nivel Completado Unico Aplicacion Mxn',
			'costo_compra_unica_aplicacion_mxn' => 'Costo Compra Unica Aplicacion Mxn',
			'costo_calificacion_unica_aplicacion_mxn' => 'Costo Calificacion Unica Aplicacion Mxn',
			'costo_busqueda_unica_aplicacion_mxn' => 'Costo Busqueda Unica Aplicacion Mxn',
			'costo_gasto_credito_unico_aplicacion_mxn' => 'Costo Gasto Credito Unico Aplicacion Mxn',
			'costo_tutorial_unico_completado_aplicacion_mxn' => 'Costo Tutorial Unico Completado Aplicacion Mxn',
			'costo_clic_unico_enlace_mxn' => 'Costo Clic Unico Enlace Mxn',
			'costo_clic_saliente_unico_mxn' => 'Costo Clic Saliente Unico Mxn',
			'costo_reproduccion_video_10_seg_mxn' => 'Costo Reproduccion Video 10 Seg Mxn',
			'clics_salientes' => 'Clics Salientes',
			'ctr_saliente' => 'Ctr Saliente',
			'clic_saliente_unico' => 'Clic Saliente Unico',
			'str_saliente_unico' => 'Str Saliente Unico',
			'porcentaje_video_reproducido' => 'Porcentaje Video Reproducido',
			'tiempo_promedio_reproduccion_video' => 'Tiempo Promedio Reproduccion Video',
			'reproducciones_video_100' => 'Reproducciones Video 100',
			'reproducciones_video_25' => 'Reproducciones Video 25',
			'reproducciones_video_50' => 'Reproducciones Video 50',
			'reproducciones_video_75' => 'Reproducciones Video 75',
			'reproducciones_video_95' => 'Reproducciones Video 95',
			'reproducciones_video_10_seg' => 'Reproducciones Video 10 Seg',
			'reproducciones_video_30_seg' => 'Reproducciones Video 30 Seg',
			'ctr' => 'Ctr',
			'roas_compras_sitio_web' => 'Roas Compras Sitio Web',
			'roas_compras_aplicacion' => 'Roas Compras Aplicacion',
			'puja' => 'Puja',
			'tipo_puja' => 'Tipo Puja',
			'visualizaciones_de_fotos' => 'Visualizaciones De Fotos',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idfacebook_data',$this->idfacebook_data,true);
		$criteria->compare('nombre_anuncio',$this->nombre_anuncio,true);
		$criteria->compare('entrega',$this->entrega,true);
		$criteria->compare('resultados',$this->resultados,true);
		$criteria->compare('indicador_resultados',$this->indicador_resultados,true);
		$criteria->compare('alcance',$this->alcance,true);
		$criteria->compare('costo_resultados',$this->costo_resultados,true);
		$criteria->compare('importe_gastado',$this->importe_gastado,true);
		$criteria->compare('puntuacion_relevancia',$this->puntuacion_relevancia,true);
		$criteria->compare('personas_acciones',$this->personas_acciones,true);
		$criteria->compare('me_gusta_pagina',$this->me_gusta_pagina,true);
		$criteria->compare('id_cuenta',$this->id_cuenta,true);
		$criteria->compare('nombre_cuenta',$this->nombre_cuenta,true);
		$criteria->compare('id_anuncio',$this->id_anuncio,true);
		$criteria->compare('finalizacion',$this->finalizacion,true);
		$criteria->compare('clicks_boton',$this->clicks_boton,true);
		$criteria->compare('porcentaje_visualizacion_canvas',$this->porcentaje_visualizacion_canvas,true);
		$criteria->compare('tiempo_visualizacion_canvas',$this->tiempo_visualizacion_canvas,true);
		$criteria->compare('id_campana',$this->id_campana,true);
		$criteria->compare('nombre_campana',$this->nombre_campana,true);
		$criteria->compare('id_conjunto_anuncios',$this->id_conjunto_anuncios,true);
		$criteria->compare('nombre_conjunto_anuncios',$this->nombre_conjunto_anuncios,true);
		$criteria->compare('click_todos',$this->click_todos,true);
		$criteria->compare('costo_mejora_estimada',$this->costo_mejora_estimada,true);
		$criteria->compare('costo_cualquier_accion',$this->costo_cualquier_accion,true);
		$criteria->compare('costo_click_unico',$this->costo_click_unico,true);
		$criteria->compare('cpc_todos',$this->cpc_todos,true);
		$criteria->compare('cpm_impresiones',$this->cpm_impresiones,true);
		$criteria->compare('costo_mil_personas',$this->costo_mil_personas,true);
		$criteria->compare('ctr_todos',$this->ctr_todos,true);
		$criteria->compare('inicio_informe',$this->inicio_informe,true);
		$criteria->compare('fin_informe',$this->fin_informe,true);
		$criteria->compare('mejora_estimada_recuerdo',$this->mejora_estimada_recuerdo,true);
		$criteria->compare('indice_mejora_estimada',$this->indice_mejora_estimada,true);
		$criteria->compare('frecuencia',$this->frecuencia,true);
		$criteria->compare('impreciones',$this->impreciones,true);
		$criteria->compare('comentarios_positivos',$this->comentarios_positivos,true);
		$criteria->compare('comentarios_negativos',$this->comentarios_negativos,true);
		$criteria->compare('proporcion_resultados',$this->proporcion_resultados,true);
		$criteria->compare('clics_sociales',$this->clics_sociales,true);
		$criteria->compare('impresiones_sociales',$this->impresiones_sociales,true);
		$criteria->compare('alcance_social',$this->alcance_social,true);
		$criteria->compare('importe_gastado_hoy',$this->importe_gastado_hoy,true);
		$criteria->compare('impresiones_en_bruto',$this->impresiones_en_bruto,true);
		$criteria->compare('valor_conversion_total',$this->valor_conversion_total,true);
		$criteria->compare('acciones',$this->acciones,true);
		$criteria->compare('clics_unicos_todos',$this->clics_unicos_todos,true);
		$criteria->compare('ctr_unicos_todos',$this->ctr_unicos_todos,true);
		$criteria->compare('ctr_unico_porcentaje',$this->ctr_unico_porcentaje,true);
		$criteria->compare('clics_socilaes_unicos_todos',$this->clics_socilaes_unicos_todos,true);
		$criteria->compare('valor_conversiones_accion_aplicacion',$this->valor_conversiones_accion_aplicacion,true);
		$criteria->compare('valor_conversion_articulos_carrito_aplicacion',$this->valor_conversion_articulos_carrito_aplicacion,true);
		$criteria->compare('valor_conversion_artuculos_wishlist_aplicacion',$this->valor_conversion_artuculos_wishlist_aplicacion,true);
		$criteria->compare('valor_conversion_visualizacion_aplicacion',$this->valor_conversion_visualizacion_aplicacion,true);
		$criteria->compare('valor_conversion_pagos_iniciados_aplicacion',$this->valor_conversion_pagos_iniciados_aplicacion,true);
		$criteria->compare('valor_conversion_compras_aplicacion',$this->valor_conversion_compras_aplicacion,true);
		$criteria->compare('valor_conversion_calificaciones_unicas_aplicacion',$this->valor_conversion_calificaciones_unicas_aplicacion,true);
		$criteria->compare('valor_conversion_gastos_creditos_aplicacion',$this->valor_conversion_gastos_creditos_aplicacion,true);
		$criteria->compare('valor_conversion_gastos_creditos',$this->valor_conversion_gastos_creditos,true);
		$criteria->compare('valor_conversion_informacion_pago_no_internet',$this->valor_conversion_informacion_pago_no_internet,true);
		$criteria->compare('valor_conversionarticulos_wishlist_no_internet',$this->valor_conversionarticulos_wishlist_no_internet,true);
		$criteria->compare('valor_conversion_registros_no_internet',$this->valor_conversion_registros_no_internet,true);
		$criteria->compare('valor_conversion_poagos_iniciados_no_internet',$this->valor_conversion_poagos_iniciados_no_internet,true);
		$criteria->compare('valor_conversion_clientes_potenciales_no_internet',$this->valor_conversion_clientes_potenciales_no_internet,true);
		$criteria->compare('valor_conversion_otro_tipo_no_internet',$this->valor_conversion_otro_tipo_no_internet,true);
		$criteria->compare('valor_conversion_compras_no_internet',$this->valor_conversion_compras_no_internet,true);
		$criteria->compare('valor_conversion_busquedas_no_internet',$this->valor_conversion_busquedas_no_internet,true);
		$criteria->compare('valor_conversion_visualizacion_contenido_no_internet',$this->valor_conversion_visualizacion_contenido_no_internet,true);
		$criteria->compare('valor_conversion_sitio_web',$this->valor_conversion_sitio_web,true);
		$criteria->compare('valor_conversion_informacion_pago_sitio_web',$this->valor_conversion_informacion_pago_sitio_web,true);
		$criteria->compare('valor_conversion_productos_carrito_sitio_web',$this->valor_conversion_productos_carrito_sitio_web,true);
		$criteria->compare('valor_conversion_articulos_wishlist_sitio_web',$this->valor_conversion_articulos_wishlist_sitio_web,true);
		$criteria->compare('valor_conversion_registros_completados_sitio_web',$this->valor_conversion_registros_completados_sitio_web,true);
		$criteria->compare('valor_conversion_pagos_iniciados_sitio_web',$this->valor_conversion_pagos_iniciados_sitio_web,true);
		$criteria->compare('valor_conversion_clientes_potenciales_sitio_web',$this->valor_conversion_clientes_potenciales_sitio_web,true);
		$criteria->compare('valor_conversion_compras_sitio_web',$this->valor_conversion_compras_sitio_web,true);
		$criteria->compare('valor_conversion_busquedas_sitio_web',$this->valor_conversion_busquedas_sitio_web,true);
		$criteria->compare('valor_conversion_visualizacion_contenido_sitio_web',$this->valor_conversion_visualizacion_contenido_sitio_web,true);
		$criteria->compare('valor_comversion_finalizacion_flujo_trabajo_facebook',$this->valor_comversion_finalizacion_flujo_trabajo_facebook,true);
		$criteria->compare('valor_conversion_compra_facxebook',$this->valor_conversion_compra_facxebook,true);
		$criteria->compare('acciones_aplicacion',$this->acciones_aplicacion,true);
		$criteria->compare('logros_desbloqueados_aplicacion',$this->logros_desbloqueados_aplicacion,true);
		$criteria->compare('sessiones_aplicaciones',$this->sessiones_aplicaciones,true);
		$criteria->compare('informacion_pago_agregada_aplicacion',$this->informacion_pago_agregada_aplicacion,true);
		$criteria->compare('articulos_agregados_carrito_aplicacion',$this->articulos_agregados_carrito_aplicacion,true);
		$criteria->compare('articulos_agregados_wishlist_aplicacion',$this->articulos_agregados_wishlist_aplicacion,true);
		$criteria->compare('registros_completados_aplicacion',$this->registros_completados_aplicacion,true);
		$criteria->compare('visualizacion_contenidos_aplicacion',$this->visualizacion_contenidos_aplicacion,true);
		$criteria->compare('pagos_iniciados_aplicacion',$this->pagos_iniciados_aplicacion,true);
		$criteria->compare('niveles_completados_aplicacion',$this->niveles_completados_aplicacion,true);
		$criteria->compare('compras_aplicacion',$this->compras_aplicacion,true);
		$criteria->compare('calificaciones_aplicacion',$this->calificaciones_aplicacion,true);
		$criteria->compare('busquedas_aplicacion',$this->busquedas_aplicacion,true);
		$criteria->compare('gastos_creditos_aplicacion',$this->gastos_creditos_aplicacion,true);
		$criteria->compare('tutoriales_completados_aplicacion',$this->tutoriales_completados_aplicacion,true);
		$criteria->compare('acciones_otro_tipo_aplicacion',$this->acciones_otro_tipo_aplicacion,true);
		$criteria->compare('interaccion_aplicacion_computadora',$this->interaccion_aplicacion_computadora,true);
		$criteria->compare('instalaciones_aplicacion_computadoras',$this->instalaciones_aplicacion_computadoras,true);
		$criteria->compare('interaccion_historia_aplicacion_computadoras',$this->interaccion_historia_aplicacion_computadoras,true);
		$criteria->compare('usos_aplicacion_computadoras',$this->usos_aplicacion_computadoras,true);
		$criteria->compare('visitas',$this->visitas,true);
		$criteria->compare('solicitudes_ofertas',$this->solicitudes_ofertas,true);
		$criteria->compare('gastos_creditos',$this->gastos_creditos,true);
		$criteria->compare('partidas_juegos',$this->partidas_juegos,true);
		$criteria->compare('clientes_potenciales_formulario',$this->clientes_potenciales_formulario,true);
		$criteria->compare('clics_enlace',$this->clics_enlace,true);
		$criteria->compare('menciones_pagina',$this->menciones_pagina,true);
		$criteria->compare('instalaciones_aplicacion_celulares',$this->instalaciones_aplicacion_celulares,true);
		$criteria->compare('informacion_pago_agregada_no_internet',$this->informacion_pago_agregada_no_internet,true);
		$criteria->compare('articulos_agregados_carrito_no_internet',$this->articulos_agregados_carrito_no_internet,true);
		$criteria->compare('articulos_agregados_wishlist_no_internet',$this->articulos_agregados_wishlist_no_internet,true);
		$criteria->compare('registros_completados_no_internet',$this->registros_completados_no_internet,true);
		$criteria->compare('pagos_iniciados_no_internet',$this->pagos_iniciados_no_internet,true);
		$criteria->compare('clientes_potenciales_no_internet',$this->clientes_potenciales_no_internet,true);
		$criteria->compare('conversiones_otro_tipo_no_internet',$this->conversiones_otro_tipo_no_internet,true);
		$criteria->compare('compras_no_internet',$this->compras_no_internet,true);
		$criteria->compare('busquedas_no_internet',$this->busquedas_no_internet,true);
		$criteria->compare('visualizaciones_contenido_no_internet',$this->visualizaciones_contenido_no_internet,true);
		$criteria->compare('conversiones_sitio_web',$this->conversiones_sitio_web,true);
		$criteria->compare('informacion_pago_agregada_sitio_web',$this->informacion_pago_agregada_sitio_web,true);
		$criteria->compare('articulos_agregados_carrito_sitio_web',$this->articulos_agregados_carrito_sitio_web,true);
		$criteria->compare('articulos_agregados_wishlist_sitio_web',$this->articulos_agregados_wishlist_sitio_web,true);
		$criteria->compare('registros_completados_sitio_web',$this->registros_completados_sitio_web,true);
		$criteria->compare('pagos_iniciados_sitio_web',$this->pagos_iniciados_sitio_web,true);
		$criteria->compare('clientes_potenciales_sitio_web',$this->clientes_potenciales_sitio_web,true);
		$criteria->compare('compras_sitio_web',$this->compras_sitio_web,true);
		$criteria->compare('busquedas_sitio_web',$this->busquedas_sitio_web,true);
		$criteria->compare('visualizaciones_contenido_sitio_web',$this->visualizaciones_contenido_sitio_web,true);
		$criteria->compare('conversaciones_mensajes_bloqueadas',$this->conversaciones_mensajes_bloqueadas,true);
		$criteria->compare('respuesta_mensajes',$this->respuesta_mensajes,true);
		$criteria->compare('nuevas_conversiones_mensajes',$this->nuevas_conversiones_mensajes,true);
		$criteria->compare('finalizacion_flujo_trabajo_facebook',$this->finalizacion_flujo_trabajo_facebook,true);
		$criteria->compare('compras_facebook',$this->compras_facebook,true);
		$criteria->compare('participacion_pagina',$this->participacion_pagina,true);
		$criteria->compare('visualizacion_fotos',$this->visualizacion_fotos,true);
		$criteria->compare('veces_compartida_publicacion',$this->veces_compartida_publicacion,true);
		$criteria->compare('comentarios_publicacion',$this->comentarios_publicacion,true);
		$criteria->compare('interaccion_publicacion',$this->interaccion_publicacion,true);
		$criteria->compare('reacciones_publicacion',$this->reacciones_publicacion,true);
		$criteria->compare('respuestas_eventos',$this->respuestas_eventos,true);
		$criteria->compare('visitas_pestanas_pagina',$this->visitas_pestanas_pagina,true);
		$criteria->compare('reproduciones_video_3_segundos',$this->reproduciones_video_3_segundos,true);
		$criteria->compare('logros_desbloqueados_unicos_aplicacion',$this->logros_desbloqueados_unicos_aplicacion,true);
		$criteria->compare('sesiones_unicas_aplicacion',$this->sesiones_unicas_aplicacion,true);
		$criteria->compare('informacion_pago_unica_agregada_aplicacion',$this->informacion_pago_unica_agregada_aplicacion,true);
		$criteria->compare('articulos_agregados_carrito_unicos_aplicacion',$this->articulos_agregados_carrito_unicos_aplicacion,true);
		$criteria->compare('articulos_agregados_wishlist_unicos_aplicacion',$this->articulos_agregados_wishlist_unicos_aplicacion,true);
		$criteria->compare('registros_unicos_completados_aplicacion',$this->registros_unicos_completados_aplicacion,true);
		$criteria->compare('visualizaciones_contenido_unicas_aplicacion',$this->visualizaciones_contenido_unicas_aplicacion,true);
		$criteria->compare('pagos_iniciados_unicos_aplicacion',$this->pagos_iniciados_unicos_aplicacion,true);
		$criteria->compare('niveles_unicos_completados_aplicacion',$this->niveles_unicos_completados_aplicacion,true);
		$criteria->compare('compras_unicas_aplicacion',$this->compras_unicas_aplicacion,true);
		$criteria->compare('calificaciones_unicas_aplicacion_enviadas',$this->calificaciones_unicas_aplicacion_enviadas,true);
		$criteria->compare('busquedas_unicas_aplicacion',$this->busquedas_unicas_aplicacion,true);
		$criteria->compare('gastos_creditos_unicos_aplicacion',$this->gastos_creditos_unicos_aplicacion,true);
		$criteria->compare('tutoriales_unicos_completados_aplicacion',$this->tutoriales_unicos_completados_aplicacion,true);
		$criteria->compare('clics_unicos_enlaces',$this->clics_unicos_enlaces,true);
		$criteria->compare('porcentaje_tiempocomponentes_canvas',$this->porcentaje_tiempocomponentes_canvas,true);
		$criteria->compare('costo_accion_aplicacion_mxn',$this->costo_accion_aplicacion_mxn,true);
		$criteria->compare('costo_logro_desbloqueado_aplicacion_mxn',$this->costo_logro_desbloqueado_aplicacion_mxn,true);
		$criteria->compare('costo_sesion_aplicacion_mxn',$this->costo_sesion_aplicacion_mxn,true);
		$criteria->compare('costo_informacion_pago_agregada_aplicacion_mxn',$this->costo_informacion_pago_agregada_aplicacion_mxn,true);
		$criteria->compare('costo_articulo_agregado_carrito_aplicacion_mxn',$this->costo_articulo_agregado_carrito_aplicacion_mxn,true);
		$criteria->compare('costo_articulo_agregado_wishlist_aplicacion_mxn',$this->costo_articulo_agregado_wishlist_aplicacion_mxn,true);
		$criteria->compare('costo_registro_completado_aplicacion_mxn',$this->costo_registro_completado_aplicacion_mxn,true);
		$criteria->compare('costo_visualizacion_contenido_aplicacion_mxn',$this->costo_visualizacion_contenido_aplicacion_mxn,true);
		$criteria->compare('costo_pago_iniciado_aplicacion_mxn',$this->costo_pago_iniciado_aplicacion_mxn,true);
		$criteria->compare('costo_nivel_completado_aplicacion_mxn',$this->costo_nivel_completado_aplicacion_mxn,true);
		$criteria->compare('costo_compra_aplicacion_mxn',$this->costo_compra_aplicacion_mxn,true);
		$criteria->compare('costo_calificacion_aplicacion_mxn',$this->costo_calificacion_aplicacion_mxn,true);
		$criteria->compare('costo_busqueda_aplicacion_mxn',$this->costo_busqueda_aplicacion_mxn,true);
		$criteria->compare('costo_gasto_credito_aplicacion_mxn',$this->costo_gasto_credito_aplicacion_mxn,true);
		$criteria->compare('costo_tutorial_completado_aplicacion_mxn',$this->costo_tutorial_completado_aplicacion_mxn,true);
		$criteria->compare('costo_accion_otro_tipo_aplicacion_mxn',$this->costo_accion_otro_tipo_aplicacion_mxn,true);
		$criteria->compare('costo_interaccion_aplicacion_mxn',$this->costo_interaccion_aplicacion_mxn,true);
		$criteria->compare('costo_instalacion_aplicacion_pc_mxn',$this->costo_instalacion_aplicacion_pc_mxn,true);
		$criteria->compare('costo_interaccion_historia_aplicacion_pc_mxn',$this->costo_interaccion_historia_aplicacion_pc_mxn,true);
		$criteria->compare('costo_uso_aplicacion_pc_mxn',$this->costo_uso_aplicacion_pc_mxn,true);
		$criteria->compare('costo_visita_mxn',$this->costo_visita_mxn,true);
		$criteria->compare('costo_solicitud_oferta_mxn',$this->costo_solicitud_oferta_mxn,true);
		$criteria->compare('costo_accion_gasto_creditos_mxn',$this->costo_accion_gasto_creditos_mxn,true);
		$criteria->compare('costo_partida_juego_mxn',$this->costo_partida_juego_mxn,true);
		$criteria->compare('costo_cliente_potencial_mxn',$this->costo_cliente_potencial_mxn,true);
		$criteria->compare('costo_me_gusta_pag_mxn',$this->costo_me_gusta_pag_mxn,true);
		$criteria->compare('cpc_mxn',$this->cpc_mxn,true);
		$criteria->compare('costo_mencion_pag_mxn',$this->costo_mencion_pag_mxn,true);
		$criteria->compare('costo_instalacion_aplicacion_mxn',$this->costo_instalacion_aplicacion_mxn,true);
		$criteria->compare('costo_informacion_pago_agregada_no_internet_mxn',$this->costo_informacion_pago_agregada_no_internet_mxn,true);
		$criteria->compare('costo_articulo_agregado_carrito_no_internet_mxn',$this->costo_articulo_agregado_carrito_no_internet_mxn,true);
		$criteria->compare('costo_articulo_agregado_wishlist_no_internet_mxn',$this->costo_articulo_agregado_wishlist_no_internet_mxn,true);
		$criteria->compare('costo_registro_completado_no_internet_mxn',$this->costo_registro_completado_no_internet_mxn,true);
		$criteria->compare('costo_pago_iniciado_no_internet_mxn',$this->costo_pago_iniciado_no_internet_mxn,true);
		$criteria->compare('costo_cliente_potencial_no_internet',$this->costo_cliente_potencial_no_internet,true);
		$criteria->compare('costo_conversion_otro_tipo_no_internet',$this->costo_conversion_otro_tipo_no_internet,true);
		$criteria->compare('costo_compra_no_internet_mxn',$this->costo_compra_no_internet_mxn,true);
		$criteria->compare('costo_busqueda_no_internet_mxn',$this->costo_busqueda_no_internet_mxn,true);
		$criteria->compare('costo_visualizacion_contenido_no_internet_mxn',$this->costo_visualizacion_contenido_no_internet_mxn,true);
		$criteria->compare('costo_conversion_sitio_web_mxn',$this->costo_conversion_sitio_web_mxn,true);
		$criteria->compare('costo_informacion_pago_agregada_sitio_web_mxn',$this->costo_informacion_pago_agregada_sitio_web_mxn,true);
		$criteria->compare('costo_articulo_agregado_carrito_sitio_web_mxn',$this->costo_articulo_agregado_carrito_sitio_web_mxn,true);
		$criteria->compare('costo_articulo_agregado_wishlist_sitio_web_mxn',$this->costo_articulo_agregado_wishlist_sitio_web_mxn,true);
		$criteria->compare('costo_registro_completado_sitio_web_mxn',$this->costo_registro_completado_sitio_web_mxn,true);
		$criteria->compare('costo_pago_iniciado_sitio_web_mxn',$this->costo_pago_iniciado_sitio_web_mxn,true);
		$criteria->compare('costo_cliente_potencial_sitio_web_mxn',$this->costo_cliente_potencial_sitio_web_mxn,true);
		$criteria->compare('costo_compra_sitio_web_mxn',$this->costo_compra_sitio_web_mxn,true);
		$criteria->compare('costo_busqueda_sitio_web_mxn',$this->costo_busqueda_sitio_web_mxn,true);
		$criteria->compare('costo_visualizacion_contenido_sitio_web_mxn',$this->costo_visualizacion_contenido_sitio_web_mxn,true);
		$criteria->compare('costo_finalizacion_flujo_trabajo_facebook_mxn',$this->costo_finalizacion_flujo_trabajo_facebook_mxn,true);
		$criteria->compare('costo_nueva_conversacion_mensajes_mxn',$this->costo_nueva_conversacion_mensajes_mxn,true);
		$criteria->compare('costo_respuesta_mensajes_mxn',$this->costo_respuesta_mensajes_mxn,true);
		$criteria->compare('costo_compra_facebook_mxn',$this->costo_compra_facebook_mxn,true);
		$criteria->compare('costo_interaccion_pagina_mxn',$this->costo_interaccion_pagina_mxn,true);
		$criteria->compare('costo_visualizacion_foto_mxn',$this->costo_visualizacion_foto_mxn,true);
		$criteria->compare('costo_veces_compartida_publicacion_mxn',$this->costo_veces_compartida_publicacion_mxn,true);
		$criteria->compare('costo_comentario_publicacion_mxn',$this->costo_comentario_publicacion_mxn,true);
		$criteria->compare('costo_interaccion_publicacion_mxn',$this->costo_interaccion_publicacion_mxn,true);
		$criteria->compare('costo_reaccion_publicacion_mxn',$this->costo_reaccion_publicacion_mxn,true);
		$criteria->compare('costo_respuesta_evento_mxn',$this->costo_respuesta_evento_mxn,true);
		$criteria->compare('costo_visita_pestana_pagina_mxn',$this->costo_visita_pestana_pagina_mxn,true);
		$criteria->compare('costo_reproduccion_video_3_seg_mxn',$this->costo_reproduccion_video_3_seg_mxn,true);
		$criteria->compare('costo_outbound_clic_mxn',$this->costo_outbound_clic_mxn,true);
		$criteria->compare('costo_logro_desbloqueado_unico_aplicacion_mxn',$this->costo_logro_desbloqueado_unico_aplicacion_mxn,true);
		$criteria->compare('costo_sesion_unica_aplicacion_mxn',$this->costo_sesion_unica_aplicacion_mxn,true);
		$criteria->compare('costo_informacion_pago_agregada_unica_aplicacion_mxn',$this->costo_informacion_pago_agregada_unica_aplicacion_mxn,true);
		$criteria->compare('costo_articulo_agregado_carrito_unico_aplicacion_mxn',$this->costo_articulo_agregado_carrito_unico_aplicacion_mxn,true);
		$criteria->compare('costo_articulo_agregado_wishlist_unico_aplicacion_mxn',$this->costo_articulo_agregado_wishlist_unico_aplicacion_mxn,true);
		$criteria->compare('costo_registro_unico_completado_aplicacion_mxn',$this->costo_registro_unico_completado_aplicacion_mxn,true);
		$criteria->compare('costo_visualizacion_contenido_unico_aplicacion_mxn',$this->costo_visualizacion_contenido_unico_aplicacion_mxn,true);
		$criteria->compare('costo_pago_iniciado_unico_aplicacion_mxn',$this->costo_pago_iniciado_unico_aplicacion_mxn,true);
		$criteria->compare('costo_nivel_completado_unico_aplicacion_mxn',$this->costo_nivel_completado_unico_aplicacion_mxn,true);
		$criteria->compare('costo_compra_unica_aplicacion_mxn',$this->costo_compra_unica_aplicacion_mxn,true);
		$criteria->compare('costo_calificacion_unica_aplicacion_mxn',$this->costo_calificacion_unica_aplicacion_mxn,true);
		$criteria->compare('costo_busqueda_unica_aplicacion_mxn',$this->costo_busqueda_unica_aplicacion_mxn,true);
		$criteria->compare('costo_gasto_credito_unico_aplicacion_mxn',$this->costo_gasto_credito_unico_aplicacion_mxn,true);
		$criteria->compare('costo_tutorial_unico_completado_aplicacion_mxn',$this->costo_tutorial_unico_completado_aplicacion_mxn,true);
		$criteria->compare('costo_clic_unico_enlace_mxn',$this->costo_clic_unico_enlace_mxn,true);
		$criteria->compare('costo_clic_saliente_unico_mxn',$this->costo_clic_saliente_unico_mxn,true);
		$criteria->compare('costo_reproduccion_video_10_seg_mxn',$this->costo_reproduccion_video_10_seg_mxn,true);
		$criteria->compare('clics_salientes',$this->clics_salientes,true);
		$criteria->compare('ctr_saliente',$this->ctr_saliente,true);
		$criteria->compare('clic_saliente_unico',$this->clic_saliente_unico,true);
		$criteria->compare('str_saliente_unico',$this->str_saliente_unico,true);
		$criteria->compare('porcentaje_video_reproducido',$this->porcentaje_video_reproducido,true);
		$criteria->compare('tiempo_promedio_reproduccion_video',$this->tiempo_promedio_reproduccion_video,true);
		$criteria->compare('reproducciones_video_100',$this->reproducciones_video_100,true);
		$criteria->compare('reproducciones_video_25',$this->reproducciones_video_25,true);
		$criteria->compare('reproducciones_video_50',$this->reproducciones_video_50,true);
		$criteria->compare('reproducciones_video_75',$this->reproducciones_video_75,true);
		$criteria->compare('reproducciones_video_95',$this->reproducciones_video_95,true);
		$criteria->compare('reproducciones_video_10_seg',$this->reproducciones_video_10_seg,true);
		$criteria->compare('reproducciones_video_30_seg',$this->reproducciones_video_30_seg,true);
		$criteria->compare('ctr',$this->ctr,true);
		$criteria->compare('roas_compras_sitio_web',$this->roas_compras_sitio_web,true);
		$criteria->compare('roas_compras_aplicacion',$this->roas_compras_aplicacion,true);
		$criteria->compare('puja',$this->puja,true);
		$criteria->compare('tipo_puja',$this->tipo_puja,true);
		$criteria->compare('visualizaciones_de_fotos',$this->visualizaciones_de_fotos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FacebookData the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
