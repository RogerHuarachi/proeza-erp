<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    //Permission
    Route::get('permissions', 'PermissionController@index')->name('permissions.index')
        ->middleware('permission:permissions.index');
    Route::get('permissions/create', 'PermissionController@create')->name('permissions.create')
        ->middleware('permission:permissions.create');
    Route::post('permissions/store', 'PermissionController@store')->name('permissions.store')
        ->middleware('permission:permissions.create');
    Route::get('permissions/{permission}/edit', 'PermissionController@edit')->name('permissions.edit')
        ->middleware('permission:permissions.edit');
    Route::put('permissions/{permission}', 'PermissionController@update')->name('permissions.update')
        ->middleware('permission:permissions.edit');
    Route::delete('permissions/{permission}', 'PermissionController@destroy')->name('permissions.destroy')
        ->middleware('permission:permissions.destroy');
    Route::get('permissions/{permission}', 'PermissionController@show')->name('permissions.show')
        ->middleware('permission:permissions.show');

    //Role
    Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');
    Route::get('roles/create', 'RoleController@create')->name('roles.create')
        ->middleware('permission:roles.create');
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('permission:roles.create');
    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');
    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('permission:roles.edit');
    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');
    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
        ->middleware('permission:roles.show');

    //User
    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('permission:users.index');
    Route::get('users/create', 'UserController@create')->name('users.create')
        ->middleware('permission:users.create');
    Route::post('users/store', 'UserController@store')->name('users.store')
        ->middleware('permission:users.create');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('permission:users.edit');
    Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('permission:users.edit');
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');
    Route::get('users/{user}', 'UserController@show')->name('users.show')
        ->middleware('permission:users.show');


    Route::put('users/{user}/state', 'UserController@state')->name('users.state')
        ->middleware('permission:users.edit');

    Route::put('users/editProfile/{user}', 'UserController@updateProfile')->name('users.updateProfile')
        ->middleware('permission:users.updateProfile');

    //City
    Route::get('cities', 'CityController@index')->name('cities.index')
        ->middleware('permission:cities.index');
    Route::get('cities/create', 'CityController@create')->name('cities.create')
        ->middleware('permission:cities.create');
    Route::post('cities/store', 'CityController@store')->name('cities.store')
        ->middleware('permission:cities.create');
    Route::get('cities/{city}/edit', 'CityController@edit')->name('cities.edit')
        ->middleware('permission:cities.edit');
    Route::put('cities/{city}', 'CityController@update')->name('cities.update')
        ->middleware('permission:cities.edit');
    Route::delete('cities/{city}', 'CityController@destroy')->name('cities.destroy')
        ->middleware('permission:cities.destroy');
    Route::get('cities/{city}', 'CityController@show')->name('cities.show')
        ->middleware('permission:cities.show');

    //Agency
    Route::get('agencies', 'AgencyController@index')->name('agencies.index')
        ->middleware('permission:agencies.index');
    Route::get('agencies/create', 'AgencyController@create')->name('agencies.create')
        ->middleware('permission:agencies.create');
    Route::post('agencies/store', 'AgencyController@store')->name('agencies.store')
        ->middleware('permission:agencies.create');
    Route::get('agencies/{agency}/edit', 'AgencyController@edit')->name('agencies.edit')
        ->middleware('permission:agencies.edit');
    Route::put('agencies/{agency}', 'AgencyController@update')->name('agencies.update')
        ->middleware('permission:agencies.edit');
    Route::delete('agencies/{agency}', 'AgencyController@destroy')->name('agencies.destroy')
        ->middleware('permission:agencies.destroy');
    Route::get('agencies/{agency}', 'AgencyController@show')->name('agencies.show')
        ->middleware('permission:agencies.show');

    //Year
    Route::get('years', 'YearController@index')->name('years.index')
        ->middleware('permission:years.index');
    Route::get('years/create', 'YearController@create')->name('years.create')
        ->middleware('permission:years.create');
    Route::post('years/store', 'YearController@store')->name('years.store')
        ->middleware('permission:years.create');
    Route::get('years/{year}/edit', 'YearController@edit')->name('years.edit')
        ->middleware('permission:years.edit');
    Route::put('years/{year}', 'YearController@update')->name('years.update')
        ->middleware('permission:years.edit');
    Route::delete('years/{year}', 'YearController@destroy')->name('years.destroy')
        ->middleware('permission:years.destroy');
    Route::get('years/{year}', 'YearController@show')->name('years.show')
        ->middleware('permission:years.show');

    //Month
    Route::get('months', 'MonthController@index')->name('months.index')
        ->middleware('permission:months.index');
    Route::get('months/create', 'MonthController@create')->name('months.create')
        ->middleware('permission:months.create');
    Route::post('months/store', 'MonthController@store')->name('months.store')
        ->middleware('permission:months.create');
    Route::get('months/{month}/edit', 'MonthController@edit')->name('months.edit')
        ->middleware('permission:months.edit');
    Route::put('months/{month}', 'MonthController@update')->name('months.update')
        ->middleware('permission:months.edit');
    Route::delete('months/{month}', 'MonthController@destroy')->name('months.destroy')
        ->middleware('permission:months.destroy');
    Route::get('months/{month}', 'MonthController@show')->name('months.show')
        ->middleware('permission:months.show');

    //Category
    Route::get('categories', 'CategoryController@index')->name('categories.index')
        ->middleware('permission:categories.index');
    Route::get('categories/create', 'CategoryController@create')->name('categories.create')
        ->middleware('permission:categories.create');
    Route::post('categories/store', 'CategoryController@store')->name('categories.store')
        ->middleware('permission:categories.create');
    Route::get('categories/{category}/edit', 'CategoryController@edit')->name('categories.edit')
        ->middleware('permission:categories.edit');
    Route::put('categories/{category}', 'CategoryController@update')->name('categories.update')
        ->middleware('permission:categories.edit');
    Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.destroy')
        ->middleware('permission:categories.destroy');
    Route::get('categories/{category}', 'CategoryController@show')->name('categories.show')
        ->middleware('permission:categories.show');

    //Item
    Route::get('items', 'ItemController@index')->name('items.index')
        ->middleware('permission:items.index');
    Route::get('items/create', 'ItemController@create')->name('items.create')
        ->middleware('permission:items.create');
    Route::post('items/store', 'ItemController@store')->name('items.store')
        ->middleware('permission:items.create');
    Route::get('items/{item}/edit', 'ItemController@edit')->name('items.edit')
        ->middleware('permission:items.edit');
    Route::put('items/{item}', 'ItemController@update')->name('items.update')
        ->middleware('permission:items.edit');
    Route::delete('items/{item}', 'ItemController@destroy')->name('items.destroy')
        ->middleware('permission:items.destroy');
    Route::get('items/{item}', 'ItemController@show')->name('items.show')
        ->middleware('permission:items.show');

    //Spending
    Route::get('spendings', 'SpendingController@index')->name('spendings.index')
        ->middleware('permission:spendings.index');
    Route::get('spendings/create', 'SpendingController@create')->name('spendings.create')
        ->middleware('permission:spendings.create');
    Route::post('spendings/store', 'SpendingController@store')->name('spendings.store')
        ->middleware('permission:spendings.create');
    Route::get('spendings/{spending}/edit', 'SpendingController@edit')->name('spendings.edit')
        ->middleware('permission:spendings.edit');
    Route::put('spendings/{spending}', 'SpendingController@update')->name('spendings.update')
        ->middleware('permission:spendings.edit');
    Route::delete('spendings/{spending}', 'SpendingController@destroy')->name('spendings.destroy')
        ->middleware('permission:spendings.destroy');
    Route::get('spendings/{spending}', 'SpendingController@show')->name('spendings.show')
        ->middleware('permission:spendings.show');

    // Filter
    Route::get('spendings/filter/months/{year}', 'SpendingController@months')->name('spendings.months')
        ->middleware('permission:spendings.index');

    Route::get('spendings/filter/categories/{id}', 'SpendingController@categories')->name('spendings.categories');
    Route::get('spendings/filter/items/{category}', 'SpendingController@items')->name('spendings.items');
    Route::get('spendings/filter/items2/{category}/{month}', 'SpendingController@items2')->name('spendings.items2');


    //Administrative
    Route::get('administratives', 'AdministrativeController@index')->name('administratives.index')
        ->middleware('permission:administratives.index');
    Route::get('administratives/create', 'AdministrativeController@create')->name('administratives.create')
        ->middleware('permission:administratives.create');
    Route::post('administratives/store', 'AdministrativeController@store')->name('administratives.store')
        ->middleware('permission:administratives.create');
    Route::get('administratives/{administrative}/edit', 'AdministrativeController@edit')->name('administratives.edit')
        ->middleware('permission:administratives.edit');
    Route::put('administratives/{administrative}', 'AdministrativeController@update')->name('administratives.update')
        ->middleware('permission:administratives.edit');
    Route::delete('administratives/{administrative}', 'AdministrativeController@destroy')->name('administratives.destroy')
        ->middleware('permission:administratives.destroy');
    Route::get('administratives/{administrative}', 'AdministrativeController@show')->name('administratives.show')
        ->middleware('permission:administratives.show');

    //Interest
    Route::get('interests', 'InterestController@index')->name('interests.index')
        ->middleware('permission:interests.index');
    Route::get('interests/create', 'InterestController@create')->name('interests.create')
        ->middleware('permission:interests.create');
    Route::post('interests/store', 'InterestController@store')->name('interests.store')
        ->middleware('permission:interests.create');
    Route::get('interests/{interest}/edit', 'InterestController@edit')->name('interests.edit')
        ->middleware('permission:interests.edit');
    Route::put('interests/{interest}', 'InterestController@update')->name('interests.update')
        ->middleware('permission:interests.edit');
    Route::delete('interests/{interest}', 'InterestController@destroy')->name('interests.destroy')
        ->middleware('permission:interests.destroy');
    Route::get('interests/{interest}', 'InterestController@show')->name('interests.show')
        ->middleware('permission:interests.show');

    //Investor
    Route::get('investors', 'InvestorController@index')->name('investors.index')
        ->middleware('permission:investors.index');
    Route::get('investors/create', 'InvestorController@create')->name('investors.create')
        ->middleware('permission:investors.create');
    Route::post('investors/store', 'InvestorController@store')->name('investors.store')
        ->middleware('permission:investors.create');
    Route::get('investors/{investor}/edit', 'InvestorController@edit')->name('investors.edit')
        ->middleware('permission:investors.edit');
    Route::put('investors/{investor}', 'InvestorController@update')->name('investors.update')
        ->middleware('permission:investors.edit');
    Route::delete('investors/{investor}', 'InvestorController@destroy')->name('investors.destroy')
        ->middleware('permission:investors.destroy');
    Route::get('investors/{investor}', 'InvestorController@show')->name('investors.show')
        ->middleware('permission:investors.show');

    //Change
    Route::get('changes', 'ChangeController@index')->name('changes.index')
        ->middleware('permission:changes.index');
    Route::delete('changes/{change}', 'ChangeController@destroy')->name('changes.destroy')
        ->middleware('permission:changes.destroy');
    Route::get('changes/{change}', 'ChangeController@show')->name('changes.show')
        ->middleware('permission:changes.show');

    //Indicator
    Route::get('indicators', 'IndicatorController@index')->name('indicators.index')
        ->middleware('permission:indicators.index');
    Route::get('indicators/create', 'IndicatorController@create')->name('indicators.create')
        ->middleware('permission:indicators.create');
    Route::post('indicators/store', 'IndicatorController@store')->name('indicators.store')
        ->middleware('permission:indicators.create');
    Route::get('indicators/{indicator}/edit', 'IndicatorController@edit')->name('indicators.edit')
        ->middleware('permission:indicators.edit');
    Route::put('indicators/{indicator}', 'IndicatorController@update')->name('indicators.update')
        ->middleware('permission:indicators.edit');
    Route::delete('indicators/{indicator}', 'IndicatorController@destroy')->name('indicators.destroy')
        ->middleware('permission:indicators.destroy');
    Route::get('indicators/{indicator}', 'IndicatorController@show')->name('indicators.show')
        ->middleware('permission:indicators.show');


    //Gatos gerencia
    Route::get('eadmins', 'User\SpendigController@index')->name('eadmins.index')
        ->middleware('permission:eadmins.index');
    Route::get('eadmins/create/{month}', 'User\SpendigController@create')->name('eadmins.create')
        ->middleware('permission:eadmins.create');
    Route::post('eadmins/store', 'User\SpendigController@store')->name('eadmins.store')
        ->middleware('permission:eadmins.create');
    Route::get('eadmins/{spending}/edit', 'User\SpendigController@edit')->name('eadmins.edit')
        ->middleware('permission:eadmins.edit');
    Route::put('eadmins/{spending}', 'User\SpendigController@update')->name('eadmins.update')
        ->middleware('permission:eadmins.edit');
    Route::delete('eadmins/{spending}', 'User\SpendigController@destroy')->name('eadmins.destroy')
        ->middleware('permission:eadmins.destroy');
    Route::get('eadmins/{spending}', 'User\SpendigController@show')->name('eadmins.show')
        ->middleware('permission:eadmins.show');


    Route::put('eadmins/sum/{spending}', 'User\SpendigController@sum')->name('eadmins.sum')
        ->middleware('permission:eadmins.edit');


    Route::get('eadmins/choose/year', 'User\SpendigController@year')->name('eadmins.year')
        ->middleware('permission:eadmins.index');
    Route::get('eadmins/choose/month/{year}', 'User\SpendigController@month')->name('eadmins.month')
        ->middleware('permission:eadmins.index');
    Route::get('eadmins/choose/spending/{month}', 'User\SpendigController@spending')->name('eadmins.spending')
        ->middleware('permission:eadmins.index');

    //Gatos Adminitrativos gerencia
    Route::get('aadmins', 'User\AdministrativeController@index')->name('aadmins.index')
        ->middleware('permission:aadmins.index');
    Route::get('aadmins/create/{month}', 'User\AdministrativeController@create')->name('aadmins.create')
        ->middleware('permission:aadmins.create');
    Route::post('aadmins/store', 'User\AdministrativeController@store')->name('aadmins.store')
        ->middleware('permission:aadmins.create');
    Route::get('aadmins/{administrative}/edit', 'User\AdministrativeController@edit')->name('aadmins.edit')
        ->middleware('permission:aadmins.edit');
    Route::put('aadmins/{administrative}', 'User\AdministrativeController@update')->name('aadmins.update')
        ->middleware('permission:aadmins.edit');
    Route::delete('aadmins/{administrative}', 'User\AdministrativeController@destroy')->name('aadmins.destroy')
        ->middleware('permission:aadmins.destroy');
    Route::get('aadmins/{administrative}', 'User\AdministrativeController@show')->name('aadmins.show')
        ->middleware('permission:aadmins.show');


    Route::get('aadmins/choose/year', 'User\AdministrativeController@year')->name('aadmins.year')
        ->middleware('permission:aadmins.index');
    Route::get('aadmins/choose/month/{year}', 'User\AdministrativeController@month')->name('aadmins.month')
        ->middleware('permission:aadmins.index');
    Route::get('aadmins/choose/administrative/{month}', 'User\AdministrativeController@administrative')->name('aadmins.administrative')
        ->middleware('permission:aadmins.index');

    //Intereses gerencia
    Route::get('iadmins', 'User\InterestController@index')->name('iadmins.index')
        ->middleware('permission:iadmins.index');
    Route::get('iadmins/create/{month}', 'User\InterestController@create')->name('iadmins.create')
        ->middleware('permission:iadmins.create');
    Route::post('iadmins/store', 'User\InterestController@store')->name('iadmins.store')
        ->middleware('permission:iadmins.create');
    Route::get('iadmins/{interest}/edit', 'User\InterestController@edit')->name('iadmins.edit')
        ->middleware('permission:iadmins.edit');
    Route::put('iadmins/{interest}', 'User\InterestController@update')->name('iadmins.update')
        ->middleware('permission:iadmins.edit');
    Route::delete('iadmins/{interest}', 'User\InterestController@destroy')->name('iadmins.destroy')
        ->middleware('permission:iadmins.destroy');
    Route::get('iadmins/{interest}', 'User\InterestController@show')->name('iadmins.show')
        ->middleware('permission:iadmins.show');



    Route::put('iadmins/sum/{interest}', 'User\InterestController@sum')->name('iadmins.sum')
        ->middleware('permission:eadmins.edit');


    Route::get('iadmins/choose/year', 'User\InterestController@year')->name('iadmins.year')
        ->middleware('permission:iadmins.index');
    Route::get('iadmins/choose/month/{year}', 'User\InterestController@month')->name('iadmins.month')
        ->middleware('permission:iadmins.index');
    Route::get('iadmins/choose/interest/{month}', 'User\InterestController@interest')->name('iadmins.interest')
        ->middleware('permission:iadmins.index');

    //Indicators gerencia
    Route::get('inadmins', 'User\IndicatorController@index')->name('inadmins.index')
        ->middleware('permission:inadmins.index');
    Route::get('inadmins/create/{month}', 'User\IndicatorController@create')->name('inadmins.create')
        ->middleware('permission:inadmins.create');
    Route::post('inadmins/store', 'User\IndicatorController@store')->name('inadmins.store')
        ->middleware('permission:inadmins.create');
    Route::get('inadmins/{indicator}/edit', 'User\IndicatorController@edit')->name('inadmins.edit')
        ->middleware('permission:inadmins.edit');
    Route::put('inadmins/{indicator}', 'User\IndicatorController@update')->name('inadmins.update')
        ->middleware('permission:inadmins.edit');
    Route::delete('inadmins/{indicator}', 'User\IndicatorController@destroy')->name('inadmins.destroy')
        ->middleware('permission:inadmins.destroy');
    Route::get('inadmins/{indicator}', 'User\IndicatorController@show')->name('inadmins.show')
        ->middleware('permission:inadmins.show');


    Route::get('inadmins/choose/year', 'User\IndicatorController@year')->name('inadmins.year')
        ->middleware('permission:inadmins.index');
    Route::get('inadmins/choose/month/{year}', 'User\IndicatorController@month')->name('inadmins.month')
        ->middleware('permission:inadmins.index');
    Route::get('inadmins/choose/indicator/{month}', 'User\IndicatorController@indicator')->name('inadmins.indicator')
        ->middleware('permission:inadmins.index');




    //Reportes
    //Gastos
    Route::get('reportSpending/year', 'Report\SpendingController@year')->name('reportSpending.year')
        ->middleware('permission:reportSpending.index');
    Route::get('reportSpending/month/{year}', 'Report\SpendingController@month')->name('reportSpending.month')
        ->middleware('permission:reportSpending.index');
    Route::get('reportSpending/role/{month}', 'Report\SpendingController@role')->name('reportSpending.role')
        ->middleware('permission:reportSpending.index');
    Route::get('reportSpending/spending/{month}/{name}', 'Report\SpendingController@spending')->name('reportSpending.spending')
        ->middleware('permission:reportSpending.index');
    //Gastos Administrativos
    Route::get('reportAdministrative/year', 'Report\AdministrativeController@year')->name('reportAdministrative.year')
        ->middleware('permission:reportAdministrative.index');
    Route::get('reportAdministrative/month/{year}', 'Report\AdministrativeController@month')->name('reportAdministrative.month')
        ->middleware('permission:reportAdministrative.index');
    Route::get('reportAdministrative/agencies/{month}', 'Report\AdministrativeController@agencies')->name('reportAdministrative.agencies')
        ->middleware('permission:reportAdministrative.index');
    Route::get('reportAdministrative/administrative/{month}/{agency}', 'Report\AdministrativeController@administrative')->name('reportAdministrative.administrative')
        ->middleware('permission:reportAdministrative.index');
    //Intereses
    Route::get('reportInterest/year', 'Report\InterestController@year')->name('reportInterest.year')
        ->middleware('permission:reportInterest.index');
    Route::get('reportInterest/month/{year}', 'Report\InterestController@month')->name('reportInterest.month')
        ->middleware('permission:reportInterest.index');
    Route::get('reportInterest/agencies/{month}', 'Report\InterestController@interest')->name('reportInterest.interest')
        ->middleware('permission:reportInterest.index');
    //Ingresos
    Route::get('reportIncome/year', 'Report\IncomeController@year')->name('reportIncome.year')
        ->middleware('permission:reportIncome.index');
    Route::get('reportIncome/month/{year}', 'Report\IncomeController@month')->name('reportIncome.month')
        ->middleware('permission:reportIncome.index');
    Route::get('reportIncome/agencies/{month}', 'Report\IncomeController@income')->name('reportIncome.income')
        ->middleware('permission:reportIncome.index');
    //Balance mensual
    Route::get('reportBalance/year', 'Report\BalanceController@year')->name('reportBalance.year')
        ->middleware('permission:reportBalance.index');
    Route::get('reportBalance/month/{year}', 'Report\BalanceController@month')->name('reportBalance.month')
        ->middleware('permission:reportBalance.index');
    Route::get('reportBalance/agencies/{month}', 'Report\BalanceController@income')->name('reportBalance.income')
        ->middleware('permission:reportBalance.index');



    //Dashboard
    Route::get('dashboard', 'Dashboard\DashboardController@index')->name('dashboard.index')
        ->middleware('permission:dashboard.index');

    Route::get('dashboard/spending', 'Dashboard\DashboardController@spending')->name('dashboard.spending')
        ->middleware('permission:dashboard.index');
    Route::get('dashboard/administrative', 'Dashboard\DashboardController@administrative')->name('dashboard.administrative')
        ->middleware('permission:dashboard.index');
    Route::get('dashboard/interest', 'Dashboard\DashboardController@interest')->name('dashboard.interest')
        ->middleware('permission:dashboard.index');
    Route::get('dashboard/income', 'Dashboard\DashboardController@income')->name('dashboard.income')
        ->middleware('permission:dashboard.index');
    Route::get('dashboard/balance', 'Dashboard\DashboardController@balance')->name('dashboard.balance')
        ->middleware('permission:dashboard.index');
    Route::get('dashboard/ct', 'Dashboard\DashboardController@ct')->name('dashboard.ct')
        ->middleware('permission:dashboard.index');
    Route::get('dashboard/pa', 'Dashboard\DashboardController@pa')->name('dashboard.pa')
        ->middleware('permission:dashboard.index');
    Route::get('dashboard/ren', 'Dashboard\DashboardController@ren')->name('dashboard.ren')
        ->middleware('permission:dashboard.index');
    Route::get('dashboard/roe', 'Dashboard\DashboardController@roe')->name('dashboard.roe')
        ->middleware('permission:dashboard.index');
    Route::get('dashboard/roa', 'Dashboard\DashboardController@roa')->name('dashboard.roa')
        ->middleware('permission:dashboard.index');
    Route::get('dashboard/mora', 'Dashboard\DashboardController@mora')->name('dashboard.mora')
        ->middleware('permission:dashboard.index');


    Route::get('dashboard/reportgastos', 'Dashboard\DashboardController@reportgastos')->name('dashboard.reportgastos')
        ->middleware('permission:dashboard.index');
    Route::get('dashboard/reportadministrativos', 'Dashboard\DashboardController@reportadministrativos')->name('dashboard.reportadministrativos')
        ->middleware('permission:dashboard.index');
    Route::get('dashboard/reportintereses', 'Dashboard\DashboardController@reportintereses')->name('dashboard.reportintereses')
        ->middleware('permission:dashboard.index');

    Route::get('dashboard/excelgastos', 'Dashboard\DashboardController@excelgastos')->name('dashboard.excelgastos')
    ->middleware('permission:dashboard.index');
    Route::get('dashboard/exceladministrativos', 'Dashboard\DashboardController@exceladministrativos')->name('dashboard.exceladministrativos')
    ->middleware('permission:dashboard.index');
    Route::get('dashboard/excelintereses', 'Dashboard\DashboardController@excelintereses')->name('dashboard.excelintereses')
    ->middleware('permission:dashboard.index');
});
