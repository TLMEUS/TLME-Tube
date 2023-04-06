<?php
/**
 * This file contains the C:/TLME/Projects/ESP/TLME-ESP-Website/App/Controllers/Home.php class for the TLME-Tube Website Project
 *
 * PHP Version: 8.2
 *
 * @author troylmarker
 * @version 1.0
 * @since 2023-3-23
 */
namespace App\Controllers;

/**
 * Import required classes
 */
use App\Models\Home as HomeModel;
use App\models\Category as CategoryModel;
use Core\Controller;
use Core\View;
use Exception;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Home Controller
 *
 * @extends Core\Controller
 * @noinspection PhpUndefinedNamespaceInspection
 * @noinspection PhpUndefinedClassInspection
 */

class Home extends Controller {

    /**
     * Show the index page
     *
     * @return void
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function indexAction(): void {
        View::render('Home/index.twig');
    }

    /**
     * Show the upload page
     *
     * @return void
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function uploadAction(): void {
        $categories = CategoryModel::getAll();
        View::render('Home/upload.twig', ['categories' => $categories]);
    }
}