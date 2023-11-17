<?php
	namespace modelo;

	class Vehiculo
	{
		public $matricula;
		public $bastidor;
		public $modelo;
		public $cilindrada;
		public $potencia;
		public $precio;
		public $fechaFabricación;
		public $extras;
		public $observaciones;
		public $urlFoto;
		public $idMarcaM;
		public $idColor;
		public $idMotor;
		public $descripcion;
		public $metalizado;

		/**
		 * @param $matricula
		 * @param $bastidor
		 * @param $idMarcaM
		 */
		public function __construct ($matricula , $bastidor , $idMarcaM)
		{
			$this->matricula = $matricula;
			$this->bastidor = $bastidor;
			$this->idMarcaM = $idMarcaM;
		}

		/**
		 * @return mixed
		 */
		public function getMatricula ()
		{
			return $this->matricula;
		}

		/**
		 * @param mixed $matricula
		 */
		public function setMatricula ($matricula)
		{
			$this->matricula = $matricula;
		}

		/**
		 * @return mixed
		 */
		public function getBastidor ()
		{
			return $this->bastidor;
		}

		/**
		 * @param mixed $bastidor
		 */
		public function setBastidor ($bastidor)
		{
			$this->bastidor = $bastidor;
		}

		/**
		 * @return mixed
		 */
		public function getModelo ()
		{
			return $this->modelo;
		}

		/**
		 * @param mixed $modelo
		 */
		public function setModelo ($modelo)
		{
			$this->modelo = $modelo;
		}

		/**
		 * @return mixed
		 */
		public function getCilindrada ()
		{
			return $this->cilindrada;
		}

		/**
		 * @param mixed $cilindrada
		 */
		public function setCilindrada ($cilindrada)
		{
			$this->cilindrada = $cilindrada;
		}

		/**
		 * @return mixed
		 */
		public function getPotencia ()
		{
			return $this->potencia;
		}

		/**
		 * @param mixed $potencia
		 */
		public function setPotencia ($potencia)
		{
			$this->potencia = $potencia;
		}

		/**
		 * @return mixed
		 */
		public function getPrecio ()
		{
			return $this->precio;
		}

		/**
		 * @param mixed $precio
		 */
		public function setPrecio ($precio)
		{
			$this->precio = $precio;
		}

		/**
		 * @return mixed
		 */
		public function getFechaFabricación ()
		{
			return $this->fechaFabricación;
		}

		/**
		 * @param mixed $fechaFabricación
		 */
		public function setFechaFabricación ($fechaFabricación)
		{
			$this->fechaFabricación = $fechaFabricación;
		}

		/**
		 * @return mixed
		 */
		public function getExtras ()
		{
			return $this->extras;
		}

		/**
		 * @param mixed $extras
		 */
		public function setExtras ($extras)
		{
			$this->extras = $extras;
		}

		/**
		 * @return mixed
		 */
		public function getObservaciones ()
		{
			return $this->observaciones;
		}

		/**
		 * @param mixed $observaciones
		 */
		public function setObservaciones ($observaciones)
		{
			$this->observaciones = $observaciones;
		}

		/**
		 * @return mixed
		 */
		public function getUrlFoto ()
		{
			return $this->urlFoto;
		}

		/**
		 * @param mixed $urlFoto
		 */
		public function setUrlFoto ($urlFoto)
		{
			$this->urlFoto = $urlFoto;
		}

		/**
		 * @return mixed
		 */
		public function getIdMarcaM ()
		{
			return $this->idMarcaM;
		}

		/**
		 * @param mixed $idMarcaM
		 */
		public function setIdMarcaM ($idMarcaM)
		{
			$this->idMarcaM = $idMarcaM;
		}

		/**
		 * @return mixed
		 */
		public function getIdColor ()
		{
			return $this->idColor;
		}

		/**
		 * @param mixed $idColor
		 */
		public function setIdColor ($idColor)
		{
			$this->idColor = $idColor;
		}

		/**
		 * @return mixed
		 */
		public function getIdMotor ()
		{
			return $this->idMotor;
		}

		/**
		 * @param mixed $idMotor
		 */
		public function setIdMotor ($idMotor)
		{
			$this->idMotor = $idMotor;
		}

		/**
		 * @return mixed
		 */
		public function getDescripcion ()
		{
			return $this->descripcion;
		}

		/**
		 * @param mixed $descripcion
		 */
		public function setDescripcion ($descripcion)
		{
			$this->descripcion = $descripcion;
		}

		/**
		 * @return mixed
		 */
		public function getMetalizado ()
		{
			return $this->metalizado;
		}

		/**
		 * @param mixed $metalizado
		 */
		public function setMetalizado ($metalizado)
		{
			$this->metalizado = $metalizado;
		}
	}

