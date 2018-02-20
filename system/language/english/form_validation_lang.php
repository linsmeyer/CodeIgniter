<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2018, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');
//
//$lang['form_validation_required']		= 'The {field} field is required.';
//$lang['form_validation_isset']			= 'The {field} field must have a value.';
//$lang['form_validation_valid_email']		= 'The {field} field must contain a valid email address.';
//$lang['form_validation_valid_emails']		= 'The {field} field must contain all valid email addresses.';
//$lang['form_validation_valid_url']		= 'The {field} field must contain a valid URL.';
//$lang['form_validation_valid_ip']		= 'The {field} field must contain a valid IP.';
//$lang['form_validation_valid_mac']		= 'The {field} field must contain a valid MAC.';
//$lang['form_validation_min_length']		= 'The {field} field must be at least {param} characters in length.';
//$lang['form_validation_max_length']		= 'The {field} field cannot exceed {param} characters in length.';
//$lang['form_validation_exact_length']		= 'The {field} field must be exactly {param} characters in length.';
//$lang['form_validation_alpha']			= 'The {field} field may only contain alphabetical characters.';
//$lang['form_validation_alpha_numeric']		= 'The {field} field may only contain alpha-numeric characters.';
//$lang['form_validation_alpha_numeric_spaces']	= 'The {field} field may only contain alpha-numeric characters and spaces.';
//$lang['form_validation_alpha_dash']		= 'The {field} field may only contain alpha-numeric characters, underscores, and dashes.';
//$lang['form_validation_numeric']		= 'The {field} field must contain only numbers.';
//$lang['form_validation_is_numeric']		= 'The {field} field must contain only numeric characters.';
//$lang['form_validation_integer']		= 'The {field} field must contain an integer.';
//$lang['form_validation_regex_match']		= 'The {field} field is not in the correct format.';
//$lang['form_validation_matches']		= 'The {field} field does not match the {param} field.';
//$lang['form_validation_differs']		= 'The {field} field must differ from the {param} field.';
//$lang['form_validation_is_unique'] 		= 'The {field} field must contain a unique value.';
//$lang['form_validation_is_natural']		= 'The {field} field must only contain digits.';
//$lang['form_validation_is_natural_no_zero']	= 'The {field} field must only contain digits and must be greater than zero.';
//$lang['form_validation_decimal']		= 'The {field} field must contain a decimal number.';
//$lang['form_validation_less_than']		= 'The {field} field must contain a number less than {param}.';
//$lang['form_validation_less_than_equal_to']	= 'The {field} field must contain a number less than or equal to {param}.';
//$lang['form_validation_greater_than']		= 'The {field} field must contain a number greater than {param}.';
//$lang['form_validation_greater_than_equal_to']	= 'The {field} field must contain a number greater than or equal to {param}.';
//$lang['form_validation_error_message_not_set']	= 'Unable to access an error message corresponding to your field name {field}.';
//$lang['form_validation_in_list']		= 'The {field} field must be one of: {param}.';

$lang['form_validation_required']			= "O campo {field} é obrigatório.";
$lang['form_validation_isset']				= "O campo {field} deve ter um valor definido.";
$lang['form_validation_valid_email']		= "O campo {field} deve conter um endereço de e-mail válido.";
$lang['form_validation_valid_emails']		= "O campo {field} deve apenas endereços de e-mail válidos.";
$lang['form_validation_valid_url']			= "O campo {field} deve conter uma URL válida.";
$lang['form_validation_valid_ip']			= "O campo {field} deve conter um IP válido.";
$lang['form_validation_min_length']			= "O campo {field} deve conter pelo menos {param} caracteres.";
$lang['form_validation_max_length']			= "O campo {field} não deve conter mais de {param} caracteres.";
$lang['form_validation_exact_length']		= "O campo {field} deve conter exatamente {param} caracteres.";
$lang['form_validation_alpha']				= "O campo {field} deve conter apenas letras.";
$lang['form_validation_alpha_numeric']		= "O campo {field} deve conter apenas caracteres alfanuméricos.";
$lang['form_validation_alpha_numeric_spaces']	= 'O campo {field} deve conter somente caracteres alfanuméricos e espaços.';
$lang['form_validation_alpha_dash']			= "O campo {field} deve conter apenas caracteres alfanuméricos, sublinhados e traços.";
$lang['form_validation_numeric']			= "O campo {field} deve conter apenas números.";
$lang['form_validation_is_numeric']			= "O campo {field} deve conter apenas caracteres numéricos.";
$lang['form_validation_integer']			= "O campo {field} deve conter um número inteiro.";
$lang['form_validation_regex_match']		= "O campo {field} não está no formato correto.";
$lang['form_validation_matches']			= "O campo {field} deve ser igual ao campo {param}.";
$lang['form_validation_differs']			= 'O campo {field} deve ser diferente ao campo {param}.';
$lang['form_validation_is_unique'] 			= "O campo {field} deve conter um valor único.";
$lang['form_validation_is_natural']			= "O campo {field} deve conter apenas números positivos.";
$lang['form_validation_is_natural_no_zero']	= "O campo {field} deve conter apenas números maiores que zero.";
$lang['form_validation_decimal']			= "O campo {field} deve conter um número decimal.";
$lang['form_validation_less_than']			= "O campo {field} deve conter um número menor que {param}.";
$lang['form_validation_greater_than']		= "O campo {field} deve conter um número maior que {param}.";
$lang['form_validation_less_than_equal_to']	= 'O campo {field} deve conter um número menor ou igual a {param}.';
$lang['form_validation_greater_than_equal_to']	= 'O campo {field} deve conter um número maior ou igual a {param}.';
$lang['form_validation_error_message_not_set']	= 'Não é possível acessar uma mensagem de erro correspondente ao nome do seu campo {field}.';
$lang['form_validation_in_list']		= 'O campo {field} deve ser um dos: {param}.';