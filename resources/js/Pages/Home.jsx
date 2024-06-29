import { Link } from "@inertiajs/inertia-react";

export default function Page() {
    return (
        <div>
            <p className="text-xl">Home</p>
            <Link href={route('react_dash_page')}>Got to dash</Link>
        </div>
    )
}