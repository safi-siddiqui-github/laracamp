import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faYoutube } from "@fortawesome/free-brands-svg-icons";
import { faBars, faBell, faCamera, faCircleHalfStroke, faCircleUser, faEllipsisVertical, faImage, faMicrophone, faSearch, faUser, faUserAlt, faVideoCamera } from "@fortawesome/free-solid-svg-icons";
import Link from "next/link";

export default function Page() {

    
    const tags = ['All', 'Youtube', 'Upwork', 'Instagram', 'Next JS', 'Tailwind CSS', 'Supabase', 'Laravel', 'Firebase', 'MySQL', 'PostgreSQL', 'Node JS', 'Express JS', 'Mongo DB', 'HTML', 'CSS', 'JavaScript'];
    return (
        <main className="flex flex-col">
            <header className="flex p-4 justify-between border-b">
                <div className="flex gap-5">
                    <FontAwesomeIcon icon={faBars} className="w-6 hover:text-red-600 cursor-pointer" />

                    <Link href="/youtube">
                        <div className="flex items-center gap-1">
                            <FontAwesomeIcon icon={faYoutube} className="w-10 text-red-600" />
                            <h1 className="text-lg font-medium">Youtube</h1>
                        </div>
                    </Link>
                </div>
                <div className="flex gap-3">
                    <FontAwesomeIcon icon={faSearch} className="w-5" />
                    <FontAwesomeIcon icon={faMicrophone} className="w-5" />
                    <FontAwesomeIcon icon={faVideoCamera} className="w-6" />
                    <FontAwesomeIcon icon={faBell} className="w-5" />
                    <FontAwesomeIcon icon={faCircleUser} className="w-6" />
                </div>
            </header>

            <section className="flex flex-col p-5">

                <div className="flex gap-3 pb-2 overflow-x-scroll scrollbar">

                    {tags.map((each, index) => (
                        <div key={`tags-${index}`} className="px-3 py-1 font-medium border border-slate-500 rounded cursor-pointer hover:border-black min-w-max">{each}</div>
                    ))}

                </div>

                <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">

                    {tags.map((each, index) => (

                        <div key={`prod-${index}`} className="flex flex-col">

                            <FontAwesomeIcon icon={faImage} className="" />

                            <div className="flex justify-between items-start">

                                <div className="flex gap-3 items-start">

                                    <FontAwesomeIcon icon={faCircleUser} className="w-10" />

                                    <div className="flex flex-col">
                                        <p className="font-medium">
                                            Youtube Video Title
                                        </p>

                                        <div className="flex flex-col text-sm">
                                            <p className="">
                                                Youtube Channel
                                            </p>
                                            <p className="">
                                                2.1K views - 14 hours ago
                                            </p>
                                        </div>
                                    </div>

                                </div>

                                <FontAwesomeIcon icon={faEllipsisVertical} className="w-1.5 cursor-pointer" />

                            </div>
                        </div>
                    ))}

                </div>




            </section>

        </main >
    )
}