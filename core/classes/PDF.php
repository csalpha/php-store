<?php 

    // ===============================================================
    // carregar classes
        namespace core\classes;
        use Mpdf\Mpdf;
    // ===============================================================

    // =============================================================================
    // class PDF
        class PDF 
        {       
            // =============================================================================
            // atributos
                // =============================================================================
                // pdf / html
                    private $pdf;
                    private $html;
                // =============================================================================

                // =============================================================================
                // left / top / width / hight / text-align
                    private $x; // left
                    private $y; // top
                    private $largura;   // width
                    private $altura;    // hight
                    private $alinhamento;   // text-align
                // =============================================================================

                // =============================================================================
                // ( fore / background ) color 
                    private $cor;   // fore-color
                    private $background; // background-color
                // =============================================================================

                // =============================================================================
                // font ( family / size / weight )
                    private $letra_familia; // font-family
                    private $letra_tamanho; // font-size
                    private $letra_tipo;    // font-weight
                // =============================================================================

                // =============================================================================
                // mostrar areas
                    private $mostrar_areas; // mostra ou esconde um contorno em volta das áreas de texto
                // =============================================================================
            // =============================================================================

            // =============================================================================
            // construtor / construct
                public function __construct( $mostrar_areas = true , $formato = 'A4', $orientacao = 'P', $modo = 'utf-8')
                {
                    // =============================================================================
                    // criar a instância da classe Mpdf
                        $this->pdf = new Mpdf([
                            'format' => $formato,
                            'orientation' => $orientacao,
                            'mode' => $modo
                        ]);
                    // =============================================================================

                    // =============================================================================
                    // iniciar o html
                        $this->html_init();
                    // =============================================================================

                    // =============================================================================
                    //  mostrar areas
                        $this->mostrar_areas = $mostrar_areas;
                    // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // ( set / configura ) template 
                public function set_template($template)
                {
                    // =============================================================================
                    // configura Template
                        $this->pdf->SetDocTemplate($template);
                    // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // iniciar html / html init
                public function html_init()
                {
                    // =============================================================================
                    // coloca o html em branco
                        $this->html = '';
                    // =============================================================================

                }
            // =============================================================================

            // =============================================================================
            // apresentar pdf / show pdf
                public function pdf_show()
                {
                    // =============================================================================
                    // output para o browser ou para ficheiro pdf
                        $this->pdf->WriteHTML($this->html);
                        $this->pdf->Output();
                    // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // Guardar pdf / Save pdf
                public function save_pdf($nome_ficheiro)
                {
                    // =============================================================================
                    // Guardar o ficheiro pdf com o nome pretendido
                        $this->pdf->WriteHTML($this->html);
                        $this->pdf->Output(PDF_PATH . $nome_ficheiro);
                    // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // nova pagina / new page
                public function new_page()
                {
                    // =============================================================================
                    // acrescentar uma nova página ao pdf
                        $this->html .= '<pagebreak>';
                    // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // métodos para definir posição e dimension do texto / 
            // methods for defining text position and size
            // =============================================================================
            
            // =============================================================================
            // set x
                public function set_x($x)
                {
                    // =============================================================================
                    // configura a coordenada x
                        $this->x = $x;
                    // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // set y
                public function set_y($y)
                {
                    // =============================================================================
                    // configura a coordenada y
                        $this->y = $y;
                    // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // set largura / width
                public function set_width($largura)
                {
                    // =============================================================================
                    // cofigura a largura 
                        $this->largura = $largura;
                    // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // set altura / height
                public function set_height($altura)
                {
                    // =============================================================================
                    // configura altura
                        $this->altura = $altura;
                    // =============================================================================
                    
                }
            // =============================================================================

            // =============================================================================
            // position 
                public function position($x, $y)
                {
                // =============================================================================
                // configura coordenadas ( x , y )        
                    $this->x = $x;
                    $this->y = $y;
                // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // dimension 
                public function dimension($largura, $altura)
                {
                    // =============================================================================
                    // define largura e altura
                        $this->largura = $largura;
                        $this->altura = $altura;
                    // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // position dimension / dimension position
                public function position_dimension($x, $y, $largura, $altura)
                {
                    // =============================================================================
                    // define a posição e a dimensão do espaço do texto
                        $this->position($x, $y);
                        $this->dimension($largura, $altura);
                    // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // cores / colors
            // =============================================================================

            // =============================================================================
            // set cor / color
                public function set_color($cor)
                {
                    // =============================================================================
                    // define a cor do texto
                        $this->cor = $cor;
                    // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // set cor background / background color
                public function set_background_color($cor)
                {
                    // =============================================================================
                    // define a cor de background
                        $this->background = $cor;
                    // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // características do texto / text features
            // =============================================================================
            
            // =============================================================================
            // set alinhamento / alignment
                public function set_alignment($alinhamento)
                {
                    // =============================================================================
                    // define o alinhamento do texto dentro do espaço
                        $this->alinhamento = $alinhamento;
                    // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // set letra familia / font
                public function set_font_family($familia)
                {

                    // =============================================================================
                    // coleccao de familias possiveis
                        $familias_possiveis = 
                        [
                            'Courier New',
                            'Arial',
                            'Franklin Gothic Medium',
                            'Lucida Sans',
                            'Times New Roman',
                        ];
                    // =============================================================================

                    // =============================================================================
                    // verificar se  a familia pertence ao conjunto de letras permitidas
                        if(!in_array($familia, $familias_possiveis))
                        {
                            // =============================================================================
                            // define font-family
                                $this->letra_familia = 'Arial';
                            // =============================================================================
                        } 
                        else 
                        {
                            // =============================================================================
                            // define font-family                    
                                $this->letra_familia = $familia;
                            // =============================================================================
                        }
                    // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // set letra tamanho / font size
                public function set_font_size($tamanho)
                {
                    // =============================================================================
                    // define font size
                        $this->letra_tamanho = $tamanho;
                    // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // set tipo letra / Font
                public function set_font($tipo)
                {
                    // =============================================================================
                    // define font
                        $this->letra_tipo = $tipo;
                    // =============================================================================
                }
            // =============================================================================
            
            // =============================================================================
            // set permissoes / define permissions
                public function set_permissions($permissoes = [], $password = '')
                {
                    // =============================================================================
                    // define permissoes para o documento a ser criado
                        $this->pdf->SetProtection($permissoes, $password);
                    // =============================================================================
                }
            // =============================================================================

            // =============================================================================
            // write / write
                public function write($texto)
                {
                    // =============================================================================
                    // escreve texto no documento

                        // =============================================================================
                        // home_page
                            $this->html .= '<div style="';
                        // =============================================================================

                        // =============================================================================
                        // posicionamento e dimensão
                            $this->html .= 'position: absolute;';
                            $this->html .= 'left: ' . $this->x . 'px;';
                            $this->html .= 'top: ' . $this->y . 'px;';
                            $this->html .= 'width: ' . $this->largura . 'px;';
                            $this->html .= 'height: ' . $this->altura . 'px;';
                        // =============================================================================

                        // =============================================================================
                        // alinhamento do texto / text-align
                            $this->html .= 'text-align: ' . $this->alinhamento . ';';
                        // =============================================================================

                        // =============================================================================
                        //  cores / colors
                            $this->html .= 'color: ' . $this->cor . ';';
                            $this->html .= 'background-color: ' . $this->background . ';';
                        // =============================================================================
                        
                        // =============================================================================
                        // letra / font ( family / size / weight )
                            $this->html .= 'font-family: ' . $this->letra_familia . ';';
                            $this->html .= 'font-size: ' . $this->letra_tamanho . ';';
                            $this->html .= 'font-weight: ' . $this->letra_tipo . ';';
                        // =============================================================================

                        // =============================================================================
                        // mostrar contorno da área
                            if($this->mostrar_areas)
                            {
                                $this->html .= 'box-shadow: inset 0px 0px 0px 1px red;';
                            }
                        // =============================================================================
                        
                        // =============================================================================
                        // fim
                            $this->html .= '">' . $texto . '</div>';
                        // =============================================================================

                    // =============================================================================
                }
            // =============================================================================
        }
    // =============================================================================