using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using HtmlForms_ASPMVC.Models;

namespace HtmlForms_ASPMVC.Controllers
{
    public class ProfileModelsController : Controller
    {
        private HtmlFormsASPMVCContext context = new HtmlFormsASPMVCContext();


        public ViewResult Details(int id)
        {
            ProfileModel profilemodel = context.ProfileModels.Single(x => x.ID == id);
            return View(profilemodel);
        }

        //
        // GET: /ProfileModels/Create

        public ActionResult Index()
        {
            return View();
        }

        //
        // POST: /ProfileModels/Create

        [HttpPost]
        public ActionResult Index(ProfileModel profilemodel)
        {
            if (ModelState.IsValid)
            {
                context.ProfileModels.Add(profilemodel);
                context.SaveChanges();
                return RedirectToAction("Details", new {id = profilemodel.ID});  
            }

            return View(profilemodel);
        }
        
        
    
    }
}